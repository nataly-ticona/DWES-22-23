from django.db import models

# Create your models here.

class Usuario(models.Model):
    nombre = models.CharField(max_length=200)
    pub_date = models.DateTimeField('date published')


class Mensaje(models.Model):
    nombre = models.ForeignKey(Usuario, on_delete=models.CASCADE)
    choice_text = models.CharField(max_length=200)
    votes = models.IntegerField(default=0)
