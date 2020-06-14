{% extends "base.html" %}
{% load static %}
{% block content %}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src=" {% static "js/ajax.js" %}"></script>
<script type="text/javascript">
  document.getElementById("addcarrito").addEventListener("click", function(event){
  event.preventDefault();
});
</script>
    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">TEMPEST</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Principal <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="productos">productos</a>
        </li>

      </ul>
      <div class="form-inline mt-2 mt-md-0">
      	{% if user.is_authenticated %}
        {% if user.rol == 1 %}
          <a class="btn btn-outline-success my-2 my-sm-0" href="/cart/{{user.id}}" style="margin-right: 15px;">carrito</a>
          {% elif user.rol == 2 %}
           <a class="btn btn-outline-success my-2 my-sm-0" href="/cart/" style="margin-right: 15px;">Pedidos</a>
          {% endif %}
        <a class="btn btn-outline-success my-2 my-sm-0" href="/accounts/logout/">cerrar sesión</a>
        {% else %}
        <a class="btn btn-outline-success my-2 my-sm-0" href="/accounts/login/" style="margin-right: 15px;">Registrarse</a>
        <a class="btn btn-outline-success my-2 my-sm-0" href="/accounts/login/">Iniciar sesión</a>
        {% endif %}
      </div>
    </div>
  </nav>
</header>

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