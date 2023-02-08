
from django.shortcuts import render, get_object_or_404
from django.http import HttpResponse
from django.template import *
from .models import Noticia
# Create your views here.
def index (request):
    varNoticiasTemplate = Noticia.objects.all()
    context = {
        'noticias':varNoticiasTemplate,
        'paginas':'hostinger, hostalia, https://www.ovhcloud.com/es-es/vps/',
    }
    return render(request,'noticias/noticias.html', context)

def detalle(request, id):
    varNoticiaTemplate = Noticia.objects.get(id = id)
    context = {
        'noticia':varNoticiaTemplate,
        }
    return render(request, 'noticias/noticia.html',context)

def detalle2(request, titulo):
    # enviamos el contexto directamente en el parametro
    return render(request, 'noticias/noticia.html',{'noticiaTemplate':get_object_or_404(Noticia, titulo = titulo)})