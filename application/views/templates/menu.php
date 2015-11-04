<?php session_start();
if ($_POST["btnAccion"] == 'Pepe'){
$campoLetra = $_POST["campoAlfa"];}
else {$campoLetra='A';}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/plantillaSitio.dwt" codeOutsideHTMLIsLocked="false" -->

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Cliente y Reserva</title>

<!-- InstanceEndEditable -->
<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background: #006;
	margin: 0;
	padding: 0;
	color: #000;
}

/* ~~ Selectores de elemento/etiqueta ~~ */
ul, ol, dl { /* Debido a las diferencias existentes entre los navegadores, es recomendable no añadir relleno ni márgenes en las listas. Para lograr coherencia, puede especificar las cantidades deseadas aquí o en los elementos de lista (LI, DT, DD) que contienen. Recuerde que lo que haga aquí se aplicará en cascada en la lista .nav, a no ser que escriba un selector más específico. */
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* la eliminación del margen superior resuelve un problema que origina que los márgenes escapen de la etiqueta div contenedora. El margen inferior restante lo mantendrá separado de los elementos de que le sigan. */
	padding-right: 15px;
	padding-left: 15px; /* la adición de relleno a los lados del elemento dentro de las divs, en lugar de en las divs propiamente dichas, elimina todas las matemáticas de modelo de cuadro. Una div anidada con relleno lateral también puede usarse como método alternativo. */
}
a img { /* este selector elimina el borde azul predeterminado que se muestra en algunos navegadores alrededor de una imagen cuando está rodeada por un vínculo */
	border: none;
}

/* ~~ La aplicación de estilo a los vínculos del sitio debe permanecer en este orden (incluido el grupo de selectores que crea el efecto hover -paso por encima-). ~~ */
a:link {
	color: #42413C;
	text-decoration: underline; /* a no ser que aplique estilos a los vínculos para que tengan un aspecto muy exclusivo, es recomendable proporcionar subrayados para facilitar una identificación visual rápida */
}
a:visited {
	color: #6E6C64;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* este grupo de selectores proporcionará a un usuario que navegue mediante el teclado la misma experiencia de hover (paso por encima) que experimenta un usuario que emplea un ratón. */
	text-decoration: none;
}

/* ~~ este contenedor de anchura fija rodea a las demás divs ~~ */
.container {
	width: 960px;
	background: #FFF;
	margin: 0 auto; /* el valor automático de los lados, unido a la anchura, centra el diseño */
}

/* ~~ no se asigna una anchura al encabezado. Se extenderá por toda la anchura del diseño. Contiene un marcador de posición de imagen que debe sustituirse por su propio logotipo vinculado ~~ */
.header {
	background: #ADB96E;
	width:960px;
}

/* ~~ Estas son las columnas para el diseño. ~~ 

1) El relleno sólo se sitúa en la parte superior y/o inferior de las divs. Los elementos situados dentro de estas divs tienen relleno a los lados. Esto le ahorra las "matemáticas de modelo de cuadro". Recuerde que si añade relleno o borde lateral a la div propiamente dicha, éste se añadirá a la anchura que defina para crear la anchura *total*. También puede optar por eliminar el relleno del elemento en la div y colocar una segunda div dentro de ésta sin anchura y el relleno necesario para el diseño deseado. También puede optar por eliminar el relleno del elemento en la div y colocar una segunda div dentro de ésta sin anchura y el relleno necesario para el diseño deseado.

2) No se asigna margen a las columnas, ya que todas ellas son flotantes. Si es preciso añadir un margen, evite colocarlo en el lado hacia el que se produce la flotación (por ejemplo: un margen derecho en una div configurada para flotar hacia la derecha). En muchas ocasiones, puede usarse relleno como alternativa. En el caso de divs para las que deba incumplirse esta regla, deberá añadir una declaración "display:inline" a la regla de la div para evitar un error que provoca que algunas versiones de Internet Explorer dupliquen el margen.

3) Dado que las clases se pueden usar varias veces en un documento (y que también se pueden aplicar varias clases a un elemento), se ha asignado a las columnas nombres de clases en lugar de ID. Por ejemplo, dos divs de barra lateral podrían apilarse si fuera necesario. Si lo prefiere, éstas pueden cambiarse a ID fácilmente, siempre y cuando las utilice una sola vez por documento.

4) Si prefiere que la navegación esté a la derecha en lugar de a la izquierda, simplemente haga que estas columnas floten en dirección opuesta (todas a la derecha en lugar de todas a la izquierda) y éstas se representarán en orden inverso. No es necesario mover las divs por el código fuente HTML.

*/
.sidebar1 {
	float: left;
	width: 180px;
	/*background: #EADCAE;*/
	background-color: #F5F5F5;
	padding-bottom: 10px;
	height:600px;
	border-right-color:#333;
	border-right-style:dotted;
	border-right-width:thin;
	}
.content {

	padding: 10px 0;
	width: 600px;
	float:left;
	
	position:relative;
	
}

/* ~~ Este selector agrupado da espacio a las listas del área de .content ~~ */
.content ul, .content ol { 
	padding: 0 15px 15px 40px; }


ul.nav {
	list-style: none; /* esto elimina el marcador de lista */
	border-top: 1px solid #666; /* esto crea el borde superior de los vínculos (los demás se sitúan usando un borde inferior en el LI) */
	margin-bottom: 15px; /* esto crea el espacio entre la navegación en el contenido situado debajo */
}
ul.nav li {
	border-bottom: 1px solid #666; /* esto crea la separación de los botones */
}
ul.nav a, ul.nav a:visited { /* al agrupar estos selectores, se asegurará de que los vínculos mantengan el aspecto de botón incluso después de haber sido visitados */
	padding: 5px 5px 5px 15px;
	display: block; /* esto asigna propiedades de bloque al vínculo, lo que provoca que llene todo el LI que lo contiene. Esto provoca que toda el área reaccione a un clic de ratón. */
	width: 160px;  /*esta anchura hace que se pueda hacer clic en todo el botón para IE6. Puede eliminarse si no es necesario proporcionar compatibilidad con IE6. Calcule la anchura adecuada restando el relleno de este vínculo de la anchura del contenedor de barra lateral. */
	text-decoration: none;
	background: #F5F5F5;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* esto cambia el color de fondo y del texto tanto para usuarios que naveguen con ratón como para los que lo hagan con teclado */
	/*background: #ADB96E;*/
	background: #FFF;
	color: #333;
}

/* ~~ El pie de página ~~ */
.footer {
	padding: 10px 0;
	background: #F5F5F5;
	color:#003;
	position: relative;/* esto da a IE6 hasLayout para borrar correctamente */
	clear: both; /* esta propiedad de borrado fuerza a .container a conocer dónde terminan las columnas y a contenerlas */
}

/* ~~ clases float/clear varias ~~ */
.fltrt {  /* esta clase puede utilizarse para que un elemento flote en la parte derecha de la página. El elemento flotante debe preceder al elemento junto al que debe aparecer en la página. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* esta clase puede utilizarse para que un elemento flote en la parte izquierda de la página. El elemento flotante debe preceder al elemento junto al que debe aparecer en la página. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* esta clase puede situarse en una <br /> o div vacía como elemento final tras la última div flotante (dentro de #container) si #footer se elimina o se saca fuera de #container */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
#editable {height:400px;
u}
-->
</style>
<!-- InstanceBeginEditable name="head" --> <script src="ajax.js" type="text/javascript"></script>
<!-- InstanceEndEditable -->
</head>

<body>


<div class="container">
  <div class="header"><a href="#"><img src="../images/banner.jpg" alt="Ejemplo de tamplate" name="logo" width="960" height="90" id="Insert_logo" style="background: #C6D580; display:block;" /></a> 
<!-- end .header --></div>
  <div class="sidebar1">
    <ul class="nav">
     <li><a href="index.php"><font size="2">Inicio</font> </a></li>
<li><a href="vista/buscador.php?opcion=Cliente"><font size="2">Link Cliente</font></a></li>    
      <li><a href="vista/buscador.php?opcion=Reserva"><font size="2">Link Reservas</font></a></li>
      <li><a href="vista/buscador.php?opcion=B"><font size="2">Link B</font></a></li>
       <li><a href="vista/buscador.php?opcion=C"><font size="2">Link C</font></a></li> 
        <li><a href="vista/buscador.php?opcion=D"><font size="2">Link D</font></a></li>   
 	</ul>
    
 
<p></p>

    <!-- end .sidebar1 -->
    </div>
  <div class="content">
    
    <div><!-- InstanceBeginEditable name="Editable del Body" -->

<!------------------------AREA EDITABLE DE LA PLANTILLA------------------------------------>
    
    <div id="editable">
<table align="center" border="0"><tr>
  <td align="center" valign="middle"><font face="Verdana, Geneva, sans-serif" size="-1"><a class="estilo2" href="javascript:Enviar('resultado.php?btnAccion=NoVencido<?php echo $_POST["btnAccion"];  ?>&campoSeleccionado=<?php echo $_POST["campoSeleccionado"]; ?>&campoAlfa=<?php echo $campoLetra; ?>&opcion=1','contenido')" title="No Vencidos" onkeypress="cargarValor();">No Vencidos</a></font></td><td>&nbsp;|&nbsp;</td>
  <td> 
  <font face="Verdana, Geneva, sans-serif" size="-1"> <a class="estilo2" href="javascript:Enviar('resultado.php?btnAccion=Vencido<?php echo $_POST["btnAccion"]; ?>&campoSeleccionado=<?php echo $_POST["campoSeleccionado"]; ?>&campoAlfa=<?php echo $campoLetra; ?>&opcion=1','contenido')" title="Cuotas Vencidas">Vencido</a> </font></td><td>&nbsp;|&nbsp;</td>

  <td><font face="Verdana, Geneva, sans-serif" size="-1">
  <a class="estilo2" href="javascript:Enviar('resultado.php?btnAccion=Historial<?php echo $_POST["btnAccion"]; ?>&campoSeleccionado=<?php echo $_POST["campoSeleccionado"]; ?>&campoAlfa=<?php echo $campoLetra; ?>&opcion=1','contenido')" title="Otras Instancias">Otras Instancias</a> </font>
  
  
</td></tr></table>

 <table align="center"><tr><td>&nbsp;</td></tr>
  <tr><td>
  
  <div id="contenido"></div>
    
</td></tr></table>

  

   <p>&nbsp; </p>
</div>
    

    
   
   
  






<!-- InstanceEndEditable --></div>
    
    
    <p>&nbsp;</p>
    <!-- end .content --></div>
 <div class="footer">

    <div align="right">    
    	<font face="Verdana, Geneva, sans-serif" size="-6">
    		<a href="Sitio"><font face="Verdana, Geneva, sans-serif" size="-6">Titulo del sitio</font></a>
    		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Direcci&oacute;n General de Gesti&oacute;n Inform&aacute;tica&nbsp;&nbsp;
        </font>
    </div>
    
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
<!-- InstanceEnd --></html>