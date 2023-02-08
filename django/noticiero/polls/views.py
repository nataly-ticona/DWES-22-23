
from django.shortcuts import render
from django.http import HttpResponse
from django.template import *
from .models import Noticia
# Create your views here.
def index (request):
    varNoticiasTemplate = Noticia.objects.all()
    context = {
        'descripcion': varNoticiasTemplate,
        'titulo':'Noticias'
    }
    return render(request,'noticias/noticia.html', context)

def detalle(request, id):
    varNoticiaTemplate = Noticia.objects.get(id = id)
    context = {
        'titulo':varNoticiaTemplate.titulo,
        'descripcion': varNoticiaTemplate.descripcion,
        }
    return render(request, 'noticias/noticia.html',context)
