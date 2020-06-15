from django.db import models
from django.conf import settings
from datetime import datetime
from django.contrib.auth.models import AbstractUser


class usuario(AbstractUser):
	rol = models.IntegerField(null=True)
	def __str__(self):
		return self.username

class pedido(models.Model):
	pedido_id = models.AutoField(primary_key=True)
	producto_id = models.IntegerField(null=False, default=1)
	usuario_id = models.IntegerField(null=False, default=1)
	cantidad = models.IntegerField(null=False)
	fecha = models.DateTimeField(default=datetime.now)
		

class producto(models.Model):
	id = models.AutoField(primary_key=True)
	nombre = models.CharField(max_length=20)
	descripcion = models.TextField(null=False)
	precio = models.FloatField()
	def __str__(self):
		return self.nombre

class carro(models.Model):
	id = models.AutoField(primary_key=True)
	usuario_id = models.IntegerField(null=False)
	producto_id = models.IntegerField(null=False, default=1)
	cantidad = models.IntegerField()
	def retid(self):
		return self.id
	