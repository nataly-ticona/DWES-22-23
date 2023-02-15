from django.urls import path, re_path
from . import views

app_name= 'polls'
urlpatterns = [
    path('', views.IndexView.as_view(), name='index'),
    path('<int:id>', views.DetailView.as_view(), name='detalle'),
    path('<int:id>/vote', views.vote, name='vote'),
    path('<int:id>/resultado', views.ResultsView.as_view(), name='resultado')
]