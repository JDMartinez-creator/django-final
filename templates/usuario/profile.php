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
          <a class="nav-link" href="../../productos">productos</a>
        </li>

      </ul>
      <div class="form-inline mt-2 mt-md-0">
        {% if user.is_authenticated %}
        {% if user.rol == 1 %}
          <a class="btn btn-outline-success my-2 my-sm-0" href="/cart/" style="margin-right: 15px;">carrito</a>
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
<br>
<main role="main">

 {% if user.is_authenticated %}
 sesion iniciada

 {% else %}
    <div class="text-center" style="margin: auto;">
      <br>
      <br>
      <h1>usted no ha iniciado sesión</h1>
      <br>
      <a class="btn btn-outline-info my-1 my-sm-0" href="/accounts/login/" style="margin-right: 15px;">Registrarse</a>
<a class="btn btn-outline-info my-2 my-sm-1" href="/accounts/login/">Iniciar sesión</a>
    </div>

    {% endif %}
{% endblock %}
