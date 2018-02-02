from django.urls import path

from . import views


urlpatterns = [
	path('', views.article_list, name='article_list'),
	path('about/', views.about, name='about'),
	# article/create needs to be above slug - if not slug will be fired first
	path('article/create', views.create_view, name='create'),
	path('article/<slug:slug>', views.article_detail, name='article_detail'),
	path('accounts/signup/', views.signup_view, name='signup'),
	path('accounts/login/', views.login_view, name='login'),
	path('accounts/logout/', views.logout_view, name='logout'),
]