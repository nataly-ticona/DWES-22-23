from django.contrib import admin

from .models import Question,Choice

class ChoiceInLine(admin.TabularInline):
    model=Choice

class QuestionAdmin(admin.ModelAdmin):
    fieldsets = [
        ('Principal',               {'fields': ['question_text']}),
        ('Date information', {'fields': ['pub_date']}),
    ]
    inlines = [ChoiceInLine]
    list_display = ('question_text', 'pub_date')
    list_filter = ['question_text','pub_date']
    search_fields = ['question_text']
    list_per_page = 10

admin.site.register(Question, QuestionAdmin)
