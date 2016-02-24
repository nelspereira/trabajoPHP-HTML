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
	<div class="contenido">       
       <div class="contenedor">
	<header>
	<marquee BEHAVIOR="alternate"  scrollamount="2" scrolldelay="10" width="1050" height="40"><h1>Sitio Web</h1></marquee>
    <br></br>
    <marquee behavior="alternate" scrollamount="2" scrolldelay="10" width="170" height="20"><b>Aplicando conocimiento</b></marquee> 
</header>      
	<h1>Formulario de Registro</h1>	
	<div class="contenido">
        <img src="autos.jpg" align="left" border="0" width="300" height="300">
	    <img src="kilos.jpg" align="right" border="0" width="300" height="300">
      <p><b>Por favor ingrese los datos</b></p>
	<br>
	<form method="POST" action="reg_usu_logueo.php">
		<p><b>Nombre</b></p>
		<input type="text" required name="username">
		<p><b>Password</b></p>
		<input type="password" required name="password">
		<p><b>Re-Password</b></p>
		<input type="password" required name="cpassword">
		<p><b>Email</b></p>
		<input type="email" required name="email">
		<br>
		<br>
 		<input type="submit" value="Registrar">				
	</form>
	 <br><p><b>o</b></p><br>
	    <form method="POST" action="trabajoweb.php">
	     <input type="submit" value=" Salir ">
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


