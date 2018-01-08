from django.urls import path
from . import views

print(views.index)

urlpatterns = [
	path('', views.index, name='index'),
]

