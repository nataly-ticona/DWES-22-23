from django.db import models

# una que herede de una clase seria: class Equipo(extens.Model):
# los id que no son generales se crean solos, porque si no tiene un id no se puede hacer un update

# las dos _ son metodos especiales hay que pasarle el self (el this)
#ManyToManyField(Equipo) es que puede tener varios juegos un mismo equipo
class Equipo(models.Model):
    nombre = models.CharField(max_length=50)
    descripcion = models.TextField()
    anio = models.DateField()

    def __str__(self):
        return f"{self.nombre} ({self.anio})"


class Genero(models.Model):
    nombre = models.CharField(max_length=50)
    descripcion = models.TextField() 

    def __str__(self):
        return f"{self.nombre}"

class Juego(models.Model):
    nombre = models.CharField(max_length=50)
    descripcion = models.TextField()
    anio = models.DateField()
    genero = models.ForeignKey(Genero, on_delete=models.SET_NULL, null=True)
    equipos = models.ManyToManyField(Equipo)

    def __str__(self):
        return f"{self.nombre} [{self.genero}]({self.anio})"

