<!DOCTYPE html>
<html lang="sp">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
header('Content-Type: text/html; charset=UTF-8');
?>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Bootstrap -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<link href="../../assets/css/bootstrap.min.css" rel="stylesheet"> 
<script src="../../assets/js/bootstrap.min.js"></script>
<script src="../../assets/jquery/jquery.js"></script>







<!--  
<div class="container">
  <div class="jumbotron">

  </div>
  <p></p>
  <p></p>
</div>
-->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
	
		<ul class="nav nav-pills nav-justified">
    <li class="dropdown active" >
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        Clientes
        <b class="caret"></b>
      </a>
      <ul class="dropdown-menu">
        <li> <a href="ControladorPago/comprarReserva">Pagar reserva</a></li>
        <li> <a href="ControladorReservaComercial/ReasignarReserva">Reasignar reserva</a></li>
        <li> <a href="ControladorReserva/cancelarReserva">Cancelar reserva</a></li>
        <li> <a href="Sis">Vuelos Privados</a></li>
      </ul>
    </li>
  
      <li class="dropdown active" >
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        Administrativos
        <b class="caret"></b>
      </a>
      <ul class="dropdown-menu">
        <li> <a href="#">Reportes.</a></li>
        <li> <a href="#">Cuentas</a></li>
         <li> <a href="ControladorReservaComercial/realizarCheckIn">Realizar check-in</a></li>
        <li> <a href="#">Ingresar pago</a></li>
      </ul>
    </li>
    
      <li class="dropdown active" >
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        Acerca de
        <b class="caret"></b>
      </a>
      <ul class="dropdown-menu">
        <li> <a href="#">Quienes somos</a></li>
        <li> <a href="#">Que es Ocuse</a></li>
         <li> <a href="#">Politicas de la empresa</a></li>
      </ul>
    </li>
    
  
    <li class="dropdown active" >
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
     Login
       
      </a>
    </li>
    
 
   <li class="dropdown active" >
      <a href="Principal" class="dropdown-toggle" data-toggle="dropdown">
     Principal  </a>
       
    
    </li>
 


		</div>
	</div>
	

  </head>