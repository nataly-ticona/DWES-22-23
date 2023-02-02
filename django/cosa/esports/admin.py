from django.contrib import admin

# de esports importame los modelos.
from .models import Equipo, Genero, Juego

admin.site.register(Equipo)
admin.site.register(Genero)
admin.site.register(Juego)