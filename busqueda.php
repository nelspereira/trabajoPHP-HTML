<!DOCTYPE html>
<html>


<head>
	<title>Sitio Web</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/j1/Css/Estilos.css">
	<meta charset="utf-8">
</head>
<body>
   
   
   <div class="contenedor">
	<header>
	
	<marquee BEHAVIOR="alternate"  scrollamount="2" scrolldelay="10" width="1050" height="40"><h1>Sitio Web</h1></marquee>
    <br>
    <!--
    <h1>Sitio Web</h1>
    <p>Aplicando conocimiento</p>
    -->
    
        <marquee behavior="alternate" scrollamount="2" scrolldelay="10" width="170" height="20"><b>Aplicando conocimiento</b></marquee> 
		
		
		<!-- Comienza el menu-->
		<?php include "modulos/menu.php"; ?>
		<!-- termina el menu-->
	</header>
	<div class="contenido">
	<!-- como se puede ver se pueden crear paginas con HTML-->
	
	<marquee  SCROLLDELAY =200 width="50%" height="60" align="bottom">
    <p><b><font size=4>Bienvenido al sitio Web, aquí puede utilizar diversas herramientas como:</font></b></p>
    <ul>
    </marquee>



<body>
<center>
    <form method="post" action="buscar.php">
        <h1><strong>Busqueda por Codigo</strong></h1>
        <br>
        <p>
            <strong>Palabra Clave:</strong>
            <input type="text" name="txtclave" size="20">
            <strong>(Codigo del Auto)</strong><br><br>
            <input  type="submit" value="Buscar" name="buscar" >
        </p>
    </form>
</center>


  <footer>
        <br>
		<div class="separador"></div><br>
		<br>
        <center>    
        <p><b>Copyright</b></p>
        <p><b>Diseñado por Nelson Fabrizzio Pereira Valer</b></p>
        <p><b>Universidad Telesup Facultad de Ingenieria de Sistemas e Informatica</b></p>
        <p><b>Lima, Febrero 2016</b></p>
        </center>
    </footer>
</div><!--contenedor-->


</body>
</html>