{% extends "base.html" %}

{% block content %}
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
          <a class="btn btn-outline-success my-2 my-sm-0" href="/cart/">carrito</a>
          {% elif user.rol == 2 %}
           <a class="btn btn-outline-success my-2 my-sm-0" href="/cart/">Pedidos</a>
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
                  
                  <form method="POST" action="">
                    <button type="submit" class="btn btn-danger">Añadir al carrito</button>
                  </form>
                </footer>
              </div>

            </div>
          </div>
{% endfor %}

        </div>
{% endblock %}