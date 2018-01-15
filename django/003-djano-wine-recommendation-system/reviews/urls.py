from django.urls import path, include
from . import views

urlpatterns = [
    path('', views.review_list, name='review_list'),
    path('review/<int:review_id>', views.review_detail, name='review_detail'),
    path('wine', views.wine_list, name='wine_list'),
    path('wine/<int:wine_id>', views.wine_detail, name='wine_detail')
]