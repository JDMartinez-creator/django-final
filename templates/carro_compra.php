{% extends "base.html" %}
{% block content %}
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="https://use.fontawesome.com/c560c025cf.js"></script>
<script type="text/javascript">
    function cambio(){
        var g = document.getElementById("valor");
        alert(g.value);
    }
</script>
<style type="">
    
.quantity {
    float: left;
    margin-right: 15px;
    background-color: #eee;
    position: relative;
    width: 80px;
    overflow: hidden
}

.quantity input {
    margin: 0;
    text-align: center;
    width: 15px;
    height: 15px;
    padding: 0;
    float: right;
    color: #000;
    font-size: 20px;
    border: 0;
    outline: 0;
    background-color: #F6F6F6
}

.quantity input.qty {
    position: relative;
    border: 0;
    width: 100%;
    height: 40px;
    padding: 10px 25px 10px 10px;
    text-align: center;
    font-weight: 400;
    font-size: 15px;
    border-radius: 0;
    background-clip: padding-box
}

.quantity .minus, .quantity .plus {
    line-height: 0;
    background-clip: padding-box;
    -webkit-border-radius: 0;
    -moz-border-radius: 0;
    border-radius: 0;
    -webkit-background-size: 6px 30px;
    -moz-background-size: 6px 30px;
    color: #bbb;
    font-size: 20px;
    position: absolute;
    height: 50%;
    border: 0;
    right: 0;
    padding: 0;
    width: 25px;
    z-index: 3
}

.quantity .minus:hover, .quantity .plus:hover {
    background-color: #dad8da
}

.quantity .minus {
    bottom: 0
}
.shopping-cart {
    margin-top: 20px;
}
</style>
<br>
<br>
<br>
<br>
{% if user.is_authenticated %}
        {% if user.rol == 1 %}
<div class="container">
   <div class="card shopping-cart">
            <div class="card-header bg-dark text-light">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                Carrito de compra 
                <a href="/productos" class="btn btn-outline-info btn-sm pull-right">continuar comprando</a>
                <div class="clearfix"></div>
            </div>

            <div class="card-body">
                    <!-- PRODUCT -->
                    
                {% for m in carro %}
                    
                    <div class="row">

                        <div class="col-12 col-sm-12 col-md-2 text-center">
                                <img class="img-responsive" src="http://placehold.it/120x80" alt="prewiew" width="120" height="80">
                        </div>
                        <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                            <h4 class="product-name"><strong>
                                
                            </strong></h4>
                            <h4>
                                <small>{% for p in productos %}
                                    {% if p.id == m.producto_id %}
                                        {{p.nombre}}
                                    {% endif %}
                                {% endfor %}</small>
                            </h4>
                        </div>
                        <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                            <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 25px">
                                <h6><strong id="precio">{% for p in productos %}
                                    {% if p.id == m.producto_id %}
                                        {{p.precio}}
                                    {% endif %}
                                {% endfor %} <span class="text-muted">x</span></strong></h6>
                            </div>

                            <form method="POST" action="{% url 'actualizar' %}" >
                            {% csrf_token %}
                            <div class="col-4 col-sm-4 col-md-4" style="padding-top: 15px">
                                <div class="quantity" >
                                    <input type="number" step="1" max="99" min="1" value="{{m.cantidad}}" title="Qty" class="qty"
                                           size="5" id="valor" name="valor">
                                </div>
                            </div>
                            <input type="text" value="{{m.producto_id}}" name="id_prod" hidden="true">
                            <div class="col-2 col-sm-2 col-md-2 text-right">
                                <button type="submit" class="btn btn-outline-success btn-xs"><i class="fa fa-refresh" aria-hidden="true"></i></button>
                                


                                </form>
                                <a href="/delcarr/{{m.producto_id}}" class="btn btn-outline-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    {% endfor %}
                    
                    <hr>
                    <!-- END PRODUCT -->
                    
               
            </div>
            <div class="card-footer">
                <div class="pull-right" style="margin: 10px">
                    {% if cantidad <= 0 %}
                    <button class="btn btn-success pull-right" disabled="true">Realizar pedido</button>
                    {% else %}
                    <a href="/realizarpedido/{{m.producto_id}}" class="btn btn-success pull-right">Realizar pedido</a>
                    {% endif %}
                    <div class="pull-right" style="margin: 5px">
                        Precio total <b>$ {{cantidad}} </b>
                    </div>
                </div>
            </div>
        </div>
</div>
    {% else %}
    <div class="text-center" style="margin: auto;">
      <br>
      <br>
      <h1>usted no tiene acceso a esta pagina</h1>
      <br>
      
    </div>
    {% endif %}

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

    {% block js %}
        <script type="text/javascript">
          
        </script>
    {% endblock %}