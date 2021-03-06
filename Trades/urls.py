from django.contrib import admin
from django.urls import path, include
from django.conf.urls import url
from .views import *

urlpatterns = [
path("productos", listProductos, name='listProductos'),
path("addCart",addCart, name= 'addCart'),
path("cart/<int:pk>/",showCart,name="showCart"),
path("delete/",deleteall),
path("delcarr/<int:pk>/",delcarr,name="delcarr"),
path("realizarpedido/",realizarPedido,name="realizarPedido"),
path("actualizar/",actualizar,name= "actualizar"),
path("pedidos/",pedidos,name = "pedidos"),
path("verpedidos/",verpedidos, name="verpedidos"),
path("verpedido/<int:pk>",verpedido,name= "verpedido"),
path("anadirproducto/",anadirproducto,name="anadirproducto"),
path("add_producto",add_producto,name="add_producto"),
]