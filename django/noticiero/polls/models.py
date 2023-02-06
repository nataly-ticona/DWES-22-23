from django.db import models
# Create your models here.
class Noticia(models.Model):
    titulo = models.CharField(max_length=50)
    descripcion = models.TextField()
    imagen = models.ImageField(upload_to='imagen', null=True)
    foto1 = models.ImageField(upload_to='foto1', null=True, blank=True)
    foto2 = models.ImageField(upload_to='foto2', null=True, blank=True )
    foto3 = models.ImageField(upload_to='foto3', null=True, blank=True)
    foto4 = models.ImageField(upload_to='foto4', null=True, blank=True)
    #lo que sale en admin cuando creas nuevos datos
    def __str__(self):
        return f"{self.titulo} "