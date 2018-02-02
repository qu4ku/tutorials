from django.shortcuts import render, redirect
from django.contrib.auth.forms import UserCreationForm, AuthenticationForm
from django.contrib.auth import login, logout

from .models import Article


def home(request):
	
	return render(request, 'homepage.html')

def about(request):
	return render(request, 'about.html')

def article_list(request):
	articles = Article.objects.all().order_by('-date')
	return render(request, 'article_list.html', {'articles': articles})

def article_detail(request, slug):
	article = Article.objects.get(slug=slug)

	return render(request, 'article_detail.html', {'article': article})

def signup_view(request):
	if request.method == 'POST':
		form = UserCreationForm(request.POST)
		if form.is_valid():
			user = form.save()
			login(request, user)
			return redirect('article_list')
	else:
		form = UserCreationForm()
	return render(request, 'signup.html', {'form': form})

def login_view(request):
	if request.method == 'POST':
		form = AuthenticationForm(data=request.POST)
		if form.is_valid():
			# TO DO: Log in the user 
			user = form.get_user()
			login(request, user)
			return redirect('article_list')
	else:
		form = AuthenticationForm()
	return render(request, 'login.html', {'form': form})

def logout_view(request):
	if request.method == 'POST':
		logout(request)
		return redirect('article_list')