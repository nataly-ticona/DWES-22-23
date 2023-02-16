from django.shortcuts import render,  get_object_or_404
from django.http import HttpResponse,HttpResponseRedirect
from .models import Product
# para la funcionde de vote HttpResponseRedirect, Choice, reverse (este hay que poner toda la linea)
from django.urls import reverse
# importamos generic
from django.views import generic

class IndexView(generic.ListView):
    template_name = 'polls/index.html'
    context_object_name = 'productos'

    def get_queryset(self):
        return Product.objects.order_by('pub_date_product')


def detail_view(request, pk):
    question = get_object_or_404(Product, id=pk)
    user = Product.objects.exclude(id=pk)
    return render(request, 'polls/detail_product.html', {
            'producto': question,
            'productos': user
        })
    