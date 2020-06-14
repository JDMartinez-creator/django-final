from django.shortcuts import render, redirect
from django.http import HttpResponse
from .models import usuario, pedido, producto, carro
from django.conf import settings
from django.views.generic import ListView
from django.core import serializers
import json

def listProductos(request):
	productos = producto.objects.all()
	id = request.user.id
	car = carro.objects.filter(usuario_id = id)
	return render(request,"list_productos.php",{"productos":productos,"carro":car})

def addCart(request):
	aidi = request.user.id
	user_name = request.POST.get('username')
	product_id = request.POST.get('id')
	bol = False
	tr = carro.objects.filter(usuario_id = aidi)
	for t in tr:
		if int(product_id) == t.producto_id:
			bol = True
	
	if bol == True:
		item = carro.objects.filter(usuario_id = aidi,producto_id=product_id)
		for i in item:
			aux = i.cantidad
			i.cantidad = aux + 1
			i.save()
	else:
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
	return render(request,"carro_compra.php",{"carro":cart,"productos":prod,"cantidad":total})

def deleteall(request):
	carro.objects.all().delete()
	response = redirect("/")
	return response

def delcarr(request,pk):
	user_id = request.user.id
	borr = carro.objects.filter(usuario_id = user_id,producto_id=pk)
	borr.delete()
	response = redirect("/cart/"+str(user_id))
	return response

def realizarPedido(request):
	user_id = request.user.id
	car = carro.objects.filter(usuario_id = user_id)
	for c in car:
		pedir = pedido()
		pedir.producto_id = c.producto_id
		pedir.cantidad = c.cantidad
		pedir.save()
	car.delete()

	response = redirect("/cart/"+str(user_id))
	return response

def actualizar(request):
	id_producto = request.POST.get('id_prod')
	cant = request.POST.get('valor')
	user_id = request.user.id
	updt = carro.objects.filter(usuario_id=user_id,producto_id = id_producto)
	for x in updt:
		x.cantidad = cant
		x.save()
	response = redirect("/cart/"+str(user_id))
	return response