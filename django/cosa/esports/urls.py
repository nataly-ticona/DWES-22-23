#import 
from django.urls import path
from . import views 

#path('<str:nombre_equipo>') -> indica el tipo de variable y la variable
urlpatterns = [
    path('',views.index, name='index'),
    path('<str:nombre_equipo>/', views.detalle_equipo, name='esports_detalle_equipo'),
    path('juego/<str:nombre_juego>/', views.detalle_juego, name='esports_detalle_juego'),
    path('genero/<str:nombre_genero>/', views.detalle_genero, name='esports_detalle_genero'),
]