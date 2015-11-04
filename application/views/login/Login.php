<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Bootply snippet - Bootstrap Bootstrap Login Form</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Example snippet for a Bootstrap login form modal" />
        
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">

        <style type="text/css"> .modal-footer {   border-top: 0px; } </style>
        <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
		<script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>/assets/jquery/jquery.js"></script>
    </head>
    <body>
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<ul class="nav nav-pills nav-justified">
				<li class="dropdown active"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown"> Clientes <b class="caret"></b>
				</a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url(); ?>index.php/ControladorPago/comprarReserva">Pagar reserva</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/ControladorReservaComercial/ReasignarReserva">Reasignar
								reserva</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/ControladorReserva/cancelarReserva">Cancelar reserva</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/Sis">Vuelos Privados</a></li>
					</ul>
				</li>

				<li class="dropdown active"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown"> Administrativos <b class="caret"></b>
				</a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url(); ?>index.php/cAdministrador/vistaReportes">Reportes.</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/cAdministrador/vistaABM">Cuentas</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/ControladorReservaComercial/realizarCheckIn">Realizar
								check-in</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/ControladorPago/comprarReserva">Ingresar pago</a></li>
					</ul>
				</li>

				<li class="dropdown active"><a href="#" class="dropdown-toggle"
					data-toggle="dropdown"> Acerca de <b class="caret"></b>
				</a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url(); ?>index.php/ControladorAlgunasVistas/QuienesSomos">Quiénes somos</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/ControladorAlgunasVistas/QueEsOcuse">Qué es Ocuse</a></li>
						<li><a href="<?php echo base_url(); ?>index.php/ControladorAlgunasVistas/Politicas">Politicas de la
								empresa</a></li>
					</ul>
				</li>


				<li class="dropdown active"><a href="<?php echo base_url(); ?>index.php/Usuario/login"> Login </a></li>


				<li class="dropdown active"><a href=""> Principal </a></li>
			</ul>
		</div>
	</div>
    	<div id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
    				<div class="modal-header">
      					<h1 class="text-center"><b> Login </b></h1>
     	 </div>
     	 <div class="modal-body">
     	 	<form class="form col-md-12 center-block">
            	<div class="form-group">
            		<input type="text" class="form-control input-lg" placeholder="Cuenta de usuario">
            	</div>
            	<div class="form-group">
              		<input type="password" class="form-control input-lg" placeholder="Password">
            	</div>
            	<div class="form-group">
              		<button class="btn btn-info btn-lg btn-block">Ingresar</button>
	            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12"></div>	
      </div>
      </div>
  </div>
</div>
</div>
<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type='text/javascript' src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
          ga('create', 'UA-40413119-1', 'bootply.com');
          ga('send', 'pageview');
        </script>
        
        <style>
            .ad {
              position: absolute;
              bottom: 70px;
              right: 48px;
              z-index: 992;
              background-color:#f3f3f3;
              position: fixed;
              width: 155px;
              padding:1px;
            }
            
            .ad-btn-hide {
              position: absolute;
              top: -10px;
              left: -12px;
              background: #fefefe;
              background: rgba(240,240,240,0.9);
              border: 0;
              border-radius: 26px;
              cursor: pointer;
              padding: 2px;
              height: 25px;
              width: 25px;
              font-size: 14px;
              vertical-align:top;
              outline: 0;
            }
            
            .carbon-img {
              float:left;
              padding: 10px;
            }
            
            .carbon-text {
              color: #888;
              display: inline-block;
              font-family: Verdana;
              font-size: 11px;
              font-weight: 400;
              height: 60px;
              margin-left: 9px;
              width: 142px;
              padding-top: 10px;
            }
            
            .carbon-text:hover {
              color: #666;
            }
            
            .carbon-poweredby {
              color: #6A6A6A;
              float: left;
              font-family: Verdana;
              font-size: 11px;
              font-weight: 400;
              margin-left: 10px;
              margin-top: 13px;
              text-align: center;
            }
        </style>
    </body>
</html>