from django.shortcuts import render
from django.http import HttpResponse
from .models import *
# Create your views here.

def index(request):
    return HttpResponse('Hola mundo')

# queremos mostrar un listado de equipos, con su descripcion y los juegos asociados
# en un url de equipo tiene que mostrarse /<nombre_equipo>/

def detalle_equipo(request, nombre_equipo):
    e = Equipo.objects.get(nombre = nombre_equipo)
    juegos = ""

    for j in e.juego_set.all():
        juegos += j.nombre
    
    return HttpResponse(f'El nombre del equipo es {e.nombre}: {e.descripcion}')

def detalle_juego(request, nombre_juego):
    return HttpResponse(f'El nombre del equipo es {nombre_juego}')

def detalle_genero(request, nombre_genero):
    return HttpResponse(f'El nombre del equipo es {nombre_genero}')

# en un url de juego /juego/<nombre_juego>
# en un url de genero /genero/<nombre_generos>