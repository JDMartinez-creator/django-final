from django.contrib import admin
from .models import usuario, pedido, producto, carro
# Register your models here.

admin.site.register(usuario)
admin.site.register(pedido)
admin.site.register(producto)
admin.site.register(carro)