from django.shortcuts import render
from django.http import HttpResponse
from .models import usuario, pedido, producto, carro

def listProductos(request):
	productos = producto.objects.all()
	return render(request,"list_productos.php",{"productos":productos})

