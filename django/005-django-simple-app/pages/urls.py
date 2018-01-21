from django.urls import path

from . import views

urlpatterns = [
	path('', views.HompePageView.as_view(), name='home'),
	path('about/', views.AboutPageView.as_view(), name='about')
]