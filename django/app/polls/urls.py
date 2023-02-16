from django.urls import path
from . import views

urlpatterns = [
path('', views.IndexView.as_view(), name='index'),
path('<int:pk>/', views.detail_view, name='detail'),
]
