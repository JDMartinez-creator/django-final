from django.shortcuts import render, redirect
from django.http import HttpResponse
from .models import usuario, pedido, producto, carro
from django.conf import settings
from django.views.generic import ListView
from django.core import serializers
import json

def listProductos(request):
	productos = producto.objects.all()
	return render(request,"list_productos.php",{"productos":productos})

def addCart(request):
	user_name = request.POST.get('username')
	product_id = request.POST.get('id')
	cart = carro()
	cart.usuario_id = user_name
	cart.producto_id = product_id
	cart.cantidad = 1
	cart.save()
	response = redirect("/cart/"+user_name)
	return response

def showCart(request,pk):
	total = 0
	cart = carro.objects.filter(usuario_id = pk)
	prod = producto.objects.all()
	for x in cart:
		unidad = producto.objects.filter(id = x.producto_id)
		for y in unidad:
			total = total + (x.cantidad * y.precio)
		#total = total + (x.cantidad * aux)
	return render(request,"carro_compra.php",{"carro":cart,"productos":prod,"cantidad":total})

	#if usuario.is_authenticated:
	#	cart = carro.objects.filter(usuario_id = 4)
	#return render(request,"carro_compra.php",{"state":cart})

def deleteall(request):
	carro.objects.all().delete()
	response = redirect("/")
	return response