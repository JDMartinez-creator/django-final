{% extends "base.html" %}
{% load static %}
{% block content %}


<br>
<br>
<br><br>
<main role="main">
  <br>
<br>
<br><br>
<div class="row" style="margin:auto;">




{% for m in productos %}
<div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">{{m.nombre}}</a>
                </h4>
                <h5>${{m.precio}}</h5>
                <p class="card-text text-justify">{{m.descripcion}}</p>
                <footer>
                  {% if user.is_authenticated %}
                      {% if user.rol == 1 %}
                          <form method="POST" action="{% url 'addCart' %}" >
                            {% csrf_token %}
                            <input type="text" value="{{ user.id }}" name="username" hidden="true">
                            <input type="text" value="{{m.id}}" hidden="true" name="id">
                            <input type="submit" value="Añadir al carrito" id="addcarrito">
                          </form>
                          {% endif %}
                    {% endif %}
                </footer>
              </div>

            </div>
          </div>
{% endfor %}

        </div>
{% endblock %}

{% block js %}
<script type="">
  function alerta()
{
  alert("añadido al carrito");
}

</script>

{% endblock %}