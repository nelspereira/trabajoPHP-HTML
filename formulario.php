<!doctype html>
<html>
<head>
	<title>Sitio Web</title>
	<link rel="stylesheet" type="text/css" href="Css/Estilos.css">
	<meta charset="utf-8">
</head>
<body>
<div class="contenedor">
	<br></br>
	<marquee BEHAVIOR="alternate"  scrollamount="2" scrolldelay="10" width="1050" height="40"><h1>Sitio Web</h1></marquee>
    <br>
    <marquee behavior="alternate" scrollamount="2" scrolldelay="10" width="170" height="20"><b>Aplicando conocimiento</b></marquee> 
		<?php include "modulos/menu.php"; ?>
		</header>
	<div class="contenido">
	<marquee  SCROLLDELAY =200 width="50%" height="60" align="bottom">
    <p><b><font size=4>Bienvenido al sitio Web, aquí puede utilizar diversas herramientas como:</font></b></p>
    <ul> 
    </marquee>
		
	<div class="contenido">
        <h1>Formulario de contacto</h1></br>
	<p><b>Por favor ingrese los datos</b></p>
	<br>
	<form method="POST" action="enviar.php">
		<p><b>Nombre</b></p>
		<input type="text" required name="Nombre">
		<p><b>Email</b></p>
		<input type="email" required name="Email">
		<p><b>Mensaje</b></p>
		<textarea required name="Mensaje"></textarea>
		<br>
		<br>
 		<input type="submit" value="Grabar">		
	</form>
	<p>o</p>
	<form method="POST" action="listaregistro.php">
	<input type="submit" value="Ver Lista de Registro">
	</form>
	
	</div><!-- fin contenido-->
	<footer>
		<!--<div class="separador"></div>-->
    </footer>
</div><!--contenedor-->
<footer>
		<div class="separador"></div>
        <center>    
        <b>Copyright</b>
        <p><b>Diseñado por Nelson Fabrizzio Pereira Valer</b></p>
        <p><b>Universidad Telesup Facultad de Ingenieria de Sistemas e Informatica</b></p>
        <p><b>Lima, Febrero 2016</b></p>
        </center>
    </footer>
</div><!--contenedor-->
</body>
</html>


