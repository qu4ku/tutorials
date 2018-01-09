from django.urls import path
from . import views

print(views.index)

urlpatterns = [
	path('', views.index, name='index'),
	path('details/<int:id>', views.details),
	path('add', views.add, name='add'),
]

