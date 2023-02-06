#import 
from django.urls import path
from . import views 

#path('<str:nombre_equipo>') -> indica el tipo de variable y la variable
urlpatterns = [
    path('',views.index, name='index'),
    path('<int:id>/', views.detalle, name='detalle'),
]