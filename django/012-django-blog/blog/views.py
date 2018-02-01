from django.shortcuts import render

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
