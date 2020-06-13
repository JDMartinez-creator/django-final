from allauth.account.forms import SignupForm
from django import forms
from django.forms import ModelForm
from Trades.models import usuario, pedido, producto, carro

ROLES =( 
    ("1", "Comprador"), 
    ("2", "Administrador")
    )
class mySignupForm(SignupForm):
	roles_field = forms.ChoiceField(choices = ROLES,label='Rol :')
	def save(self, request):
		user = super(mySignupForm, self).save(request)
		return user

class usuarioForm(ModelForm):
	class Meta:
		model = usuario
		fields = ['username', 'password','rol']

class carroForm(ModelForm):
	class Meta:
		model = carro
		fields = ['usuario_id','producto_id','cantidad']