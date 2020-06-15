from django.views.generic import ListView
from django.shortcuts import render,redirect
from django.http import HttpResponse
from .forms import usuarioForm
from Trades.models import usuario, pedido, producto, carro
def principal(request):
	return render(request,"principal.php")

def login(request):
	return render(request,"login.html")

def userS(request):
	username = request.POST.get('username')
	roles = request.POST.get('roles_field')
	passw = request.POST.get('password1')
	user = usuario.objects.create_user(username,email=None,password = passw,rol=roles)
	#username = ""
	#if request.method=='POST':
		#username = request.POST.get('username')
		#roles = request.POST.get('roles_field')
		#password = request.POST.get('password1')
		#usuari = usuario()
		#usuari.username = username
		#usuari.password = password
		#usuari.rol = roles
		#usuari.save()
	response = redirect("/")
	return response

def redir(request):
	
	response = redirect("/pedidos/")
	return response
