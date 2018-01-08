from django.urls import path
import views

print(views)

urlpatterns = [
	path('', views.index, name='index'),
]

