from django.contrib import admin

# de esports importame los modelos.
from .models import Question,Choice

admin.site.register(Question, Choice)