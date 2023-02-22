from django.contrib.auth.models import User, Group
from rest_framework import serializers

from .models import Question


class QuestionSerializer(serializers.HyperlinkedModelSerializer):
    class Meta:
        model = Question
        fields = ['question_text', 'pub_date']


# class GroupSerializer(serializers.HyperlinkedModelSerializer):
#     class Meta:
#         model = Question
#         fields = ['question_text', 'pub_date']