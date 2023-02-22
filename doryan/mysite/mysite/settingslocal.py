# SECURITY WARNING: keep the secret key used in production secret!
SECRET_KEY = 'd6896ae6f3db07856c416cc2d4272a312a19bb3fc6b582fcf4690c7745a66e2e834752ab6a6a1756386261eab108e811b78c7e34d5f43fa8d4dd690c78c917164b541ea8de66b62208832da8f6880e04470029f330e7b00a94d12f971ad4a22aaa4f0a4b'

DATABASES = {
    'default': {
        'ENGINE': 'django.db.backends.mysql',
        'NAME': 'mysite',
        'USER': 'nataly',
        'PASSWORD': '1234',
        'HOST': '127.0.0.1',
        'PORT': '3306',
    }
}