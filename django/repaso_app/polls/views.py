from django.shortcuts import render,  get_object_or_404
from django.http import HttpResponse,HttpResponseRedirect
from .models import Question, Choice
# para la funcionde de vote HttpResponseRedirect, Choice, reverse (este hay que poner toda la linea)
from django.urls import reverse
# importamos generic
from django.views import generic

class IndexView(generic.ListView):
    template_name = 'polls/index.html'
    context_object_name = 'latest_question_list'

    def get_queryset(self):
        return Question.objects.order_by('-pub_date')
