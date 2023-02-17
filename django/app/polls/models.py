from djmoney.models.fields import MoneyField
from django.db import models

class Product(models.Model):
    photo_product = models.ImageField(upload_to='imagen', null=True, blank=False)
    name_product = models.CharField(max_length=200)
    price_product = MoneyField(max_digits=14, decimal_places=2, default_currency='EUR', null=True, blank=False)
    description_product = models.TextField()
    pub_date_product = models.DateTimeField()
    #para meter dinero https://django-money.readthedocs.io/en/latest/ 

    def __str__(self):
        return self.name_product

