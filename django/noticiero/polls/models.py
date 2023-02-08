from django.db import models
# Create your models here.
class Noticia(models.Model):
    titulo = models.CharField(max_length=50)
    descripcion = models.TextField()
    img1 = models.ImageField(upload_to='imagen', null=True, blank=False)
    img2 = models.ImageField(upload_to='foto1', null=True, blank=True)
    img3 = models.ImageField(upload_to='foto2', null=True, blank=True )
    img4 = models.ImageField(upload_to='foto3', null=True, blank=True)
    img5 = models.ImageField(upload_to='foto4', null=True, blank=True)
    #lo que sale en admin cuando creas nuevos datos
    def __str__(self):
        return f"{self.titulo} "

    def getImages(self):
        return [self.img1, self.img2, self.img3, self.img4, self.img5]