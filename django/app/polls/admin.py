from django.contrib import admin
# añadimos el modelo del producto
from .models import Product

admin.site.register(Product)
