from django.db import models

class Product(models.Model):
    photo_product = models.ImageField(upload_to='imagen', null=True, blank=False)
    name_product = models.CharField(max_length=200)
    description_product = models.TextField()
    pub_date_product = models.DateTimeField()

    def __str__(self):
        return self.name_product

