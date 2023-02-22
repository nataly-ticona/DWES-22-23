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
        """Return the last five published questions."""
        return Question.objects.order_by('-pub_date')

class CosasDePreguntas(generic.DetailView):
    # esta clase hereda de este y el de Question
    model=Question
    context_object_name = 'encuesta'

""" def detalle(request, id):
    encuesta = get_object_or_404(Question, pk=id)
    return render(
        request,
        'polls/detalle.html',
        {
            'encuesta': encuesta
        }
    )
"""

class DetailView(CosasDePreguntas):
    # model = Question
    template_name = 'polls/detalle.html'

    # def get_query_set(self):
    # cosa = get_object_or_404(Question, pk=id)
    # return render(request, 'polls/resultados.html',{
    #     'encuesta': cosa,
    # }
    # )

"""
def resultado(request, id):
    question = get_object_or_404(Question, pk=id)
    return render(request, 'polls/resultados.html',{
        'encuesta': question,
    }
    )
"""
class ResultsView(CosasDePreguntas):
    model = Question
    template_name = 'polls/resultados.html'

"""def vote(request, id):
    question = get_object_or_404(Question, pk=id)
    try:
        # esto es como el $_POST['choice'] del formulario de input
        selected_choice = question.choice_set.get(pk=request.POST['choice'])
    except (KeyError, Choice.DoesNotExist):
        # Redisplay the question voting form.
        # poner detalle.html
        return render(request, 'polls/detalle.html', {
            'encuesta': question,
            'error_message': "You didn't select a choice.",
        })
    else:
        selected_choice.votes += 1
        selected_choice.save()
        return HttpResponseRedirect(reverse(f"/polls/{question.id}/resultado/")) 
"""
        # Always return an HttpResponseRedirect after successfully dealing
        # with POST data. This prevents data from being posted twice if a
        # user hits the Back button.
        # return HttpResponseRedirect(reverse('polls:results', args=(question.id,)))

def vote(request, pk):
    question = get_object_or_404(Question, pk=pk)
    try:
        # esto es como el $_POST['choice'] del formulario de input
        selected_choice = question.options.get(pk=request.POST['choice'])
    except (KeyError, Choice.DoesNotExist):
        # Redisplay the question voting form.
        # poner detalle.html
        return render(request, 'polls/detalle.html', {
            'encuesta': question,
            'error_message': "You didn't select a choice.",
        })
    else:
        selected_choice.votes += 1
        selected_choice.save()
        return HttpResponseRedirect(reverse('polls:resultado', args=(question.id,)))

# DE SERIALIZER
from rest_framework import viewsets
from .serializer import QuestionSerializer

class QuestionViewSet(viewsets.ModelViewSet):
    queryset = Question.objects.all().order_by('pub_date')




"""def index(request): 
    # corta al final en 5 lineas [:5]
    preguntas = Question.objects.order_by('-pub_date')
    return render(
        request, 
        'polls/index.html',
        {
        'latest_question_list':preguntas
        }
    )
"""