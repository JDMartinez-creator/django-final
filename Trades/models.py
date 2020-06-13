from django.db import models
from django.conf import settings
from datetime import datetime
from django.contrib.auth.models import AbstractUser


class usuario(AbstractUser):
	rol = models.IntegerField(null=True)
	def __str__(self):
		return self.username

class pedido(models.Model):
	pedido_id = models.IntegerField()
	usuario_id = models.IntegerField()
	producto_id = models.IntegerField()
	orden_id = models.IntegerField()
	cantidad = models.IntegerField()
	fecha = models.DateTimeField(default=datetime.now)
	def __str__(self):
		return self.pedido_id
		return self.usuario_id

class producto(models.Model):
	id = models.AutoField(primary_key=True)
	nombre = models.CharField(max_length=20)
	descripcion = models.TextField()
	precio = models.FloatField()
	def __str__(self):
		return self.nombre

class carro(models.Model):
	id = models.AutoField(primary_key=True)
	usuario_id = models.IntegerField()
	producto_id = models.IntegerField()
	cantidad = models.IntegerField()
	def __str__(self):
		return self.usuario_id
	