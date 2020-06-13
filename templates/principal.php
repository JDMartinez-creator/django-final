{% load static %}
<!DOCTYPE html>
<html>
<head>
	<title>Productos</title>
  
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body >
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

<main role="main">
  <br>
<br>
<br>
<br>
<div class="text-center row-lg-2"><img src="{% static "img/floreria1.png" %}"> <img src="{% static "img/BRAND.png" %}" style="width=40px"> </div>

<br>
<br>
<br>
<br> 
<br>
  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140" src="{% static "backgroundlogin.jpg" %}"><title>Por temporada:</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>aa</svg>
        <h2>Por temporada</h2>
        <p class="text-justify">Porque la naturaleza nos regala belleza todo el año, nuestra empresa "no hay nombre aun jejejeje" se ha dado a la tarea de comercializar y distribuir flores de temporada, esta clasificación le permite a nuestra apreciable clientela ampliar sus diseños y hacer que su creatividad llegue a otro nivel, la venta de flores a domicilio, es un plus que te ofrecemos dándote la garantía de que a tu negocio llegara flor fresca y de excelente calidad.</p>
        
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
        <h2>Todo el año</h2>
        <p class="text-justify">El tiempo puede convertirse en tu mejor amigo, en "inserte nombre de la pag." queremos que el tiempo que inviertes en la búsqueda de la materia prima para tus diseños florales, lo inviertas en tu clientela, y las personas especiales para ti, permítenos ser parte de tu empresa y así brindarte flores de la más selecta calidad, la flor que manejamos pasa por un estricto control de calidad, la venta de flores es todo el año.</p>
        
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
        <h2>Exóticas</h2>
        <p class="text-justify">Las flores mueven estados de ánimo cuando llegan a su destino, construye con una flor sonrisas, incluye flores alegres en tus diseños florales, incluye flores exóticas, y con tu arte convertirás un día ordinario en un día extraordinario, tenemos venta de flores exóticas todo el año, en sus diferentes variedades</p>
        
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->





<br>
  <!-- FOOTER -->
  <footer class="container">
    
    <p class="text-center"> &middot;  &copy; S8A Implementación de servicios web &middot; </p>
  </footer>
</main>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>