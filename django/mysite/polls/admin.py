from django.contrib import admin

from .models import Question, Choice

# metemos aqui la linea de choices
class ChoiceInLine(admin.TabularInline):
    model = Choice
    

class QuestionAdmin(admin.ModelAdmin):
    fieldsets = [
        ('ESTE ES EL TEXTO DE LA PREGUNTA',{'fields': ['question_text']}),
        ('ESTO ES PARA LA FECHA', {'fields': ['pub_date']}),
    ]
    # con esto metemos las opciones del la pregunta que tenemos en Question
    inlines = [ChoiceInLine]
    list_display = ('question_text', 'pub_date')
    list_filter = ['question_text','pub_date']
    # el numero de preguntas que se muestran
    list_per_page = 2


admin.site.register(Question, QuestionAdmin)
admin.site.register(Choice)

"""
class QuestionAdmin(admin.ModelAdmin):
    # ordenar como se ve la pantalla de registro por: fecha, y la pregunta
    fields = ['pub_date', 'question_text']
"""

""" ESTO ES EL TUTO 7, solo modificamos el admin"""