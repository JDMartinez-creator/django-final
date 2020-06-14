{% extends "base.html" %}
{% block content %}

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
