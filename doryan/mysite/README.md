# Django tutorial

## estructura web

└── mysite              # django-admin startproject <nombre>
    ├── db.sqlite3      # Por defecto base de datos SQLite
    ├── manage.py       # Se crea solo, manejar el proyecto
    ├── mysite          # mysite configuraciones generales del proyecto
    │   ├── asgi.py     # tiene que ver con el despliegue.
    │   ├── __init__.py # está vacío. Indica que es un módulo e python
    │   ├── settings.py # configración general
    │   ├── urls.py     # Información para el router. GENERAL. distribuidor de peticiones
    │   └── wsgi.py     # tiene que ver con el despliegue.
    └── polls           # Primera aplicación
        ├── admin.py    # lo veremos. Tiene el scaffolding (Andamiaje)
        ├── apps.py     # Define info de polls
        ├── __init__.py # está vacío. Indica que es un módulo e python
        ├── migrations  # Cambio en la base de datos
        │   └── __init__.py
        ├── models.py   # Defino clases de datos y lógica de negocio
        ├── tests.py    # Unit testing
        ├── urls.py     # Defino quién controla esa petición (vista -> "controlador")
        └── views.py    # interactúa con modelos y lo pinta en un template (template -> "vista")

