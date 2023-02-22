from django.shortcuts import render, get_object_or_404
from django.http import HttpResponse, HttpResponseRedirect

from .models import Question,Choice
from django.template import loader
from django.urls import reverse
from django.views import generic


# def index(request):
#     # ORM pedir preguntas
#     latest_question_list = Question.objects.order_by('-pub_date')[:5]
#     context = {
#         'latest_question_list': latest_question_list
#         }
#     return render(request, 'polls/index.html', context)

# Esto es herencia multiple para que herede las demas clases model y context_object_name
class CosasDePreguntas(generic.DetailView):
    model = Question
    context_object_name = 'encuesta'

# No puede heredar porque esta haciendo una ListView
class IndexView(generic.ListView):
    template_name = 'polls/index.html'
    context_object_name = 'latest_question_list'
    paginate_by = 2


    def get_queryset(self):
        """Return the last five published questions."""
        return Question.objects.order_by('-pub_date')[:20]


class DetailView(CosasDePreguntas):
    # model = Question
    template_name = 'polls/detalle.html'
    # context_object_name = 'encuesta'


class ResultsView(CosasDePreguntas):
    # model = Question
    template_name = 'polls/resultado.html'
    # context_object_name = 'encuesta'


def vote(request, pk):
    question = get_object_or_404(Question, pk=pk)
    try:
        selected_choice = question.options.get(pk=request.POST['choice'])
    except (KeyError, Choice.DoesNotExist):
        # Redisplay the question voting form.
        return render(request, 'polls/detalle.html', {
            'encuesta': question,
            'error_message': "You didn't select a choice.",
        })
    else:
        selected_choice.votes += 1
        selected_choice.save()
        # return HttpResponseRedirect(f"/polls/{question.id}/resultado/")
        # Always return an HttpResponseRedirect after successfully dealing
        # with POST data. This prevents data from being posted twice if a
        # user hits the Back button.
        return HttpResponseRedirect(reverse('polls:resultado', args=(question.id,)))



from rest_framework import viewsets
from .serializer import QuestionSerializer

class QuestionViewSet(viewsets.ViewSet):
    queryset = Question.objects.all().order_by('pub_date')
    serializer_class = QuestionSerializer


# def detalle(request, id):
#     # Pide al ORM la pregunta con ese id
#     # Y si no la encuentra levanta una excepcion 404
#     encuesta = get_object_or_404(Question, pk=id)
#     return render(
#         request,
#         'polls/detalle.html',
#         {
#             'encuesta': encuesta
#         }
#     )

# def vote(request, id):
#     question = get_object_or_404(Question, pk=id)
#     try:
#         selected_choice = question.options.get(pk=request.POST['choice'])
#     except (KeyError, Choice.DoesNotExist):
#         # Redisplay the question voting form.
#         return render(request, 'polls/detalle.html', {
#             'encuesta': question,
#             'error_message': "You didn't select a choice.",
#         })
#     else:
#         selected_choice.votes += 1
#         selected_choice.save()
#         # return HttpResponseRedirect(f"/polls/{question.id}/resultado/")
#         # Always return an HttpResponseRedirect after successfully dealing
#         # with POST data. This prevents data from being posted twice if a
#         # user hits the Back button.
#         return HttpResponseRedirect(reverse('polls:resultado', args=(question.id,)))

# def resultado(request, id):
#     question = get_object_or_404(Question, pk=id)
#     return render(request, 'polls/resultado.html',{
#         'encuesta':question
#     })