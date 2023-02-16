from django.contrib import admin
from django.urls import include, path
# para poder añadir imagenes importamos lo siguiente y el static de la variable
from django.conf.urls.static import static
from django.conf import settings

urlpatterns = [
    path('polls/', include('polls.urls')),
    path('admin/', admin.site.urls),
]+ static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)