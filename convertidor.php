<!doctype html>
<html>
<head>
	<title>Sitio Web</title>
	<link rel="stylesheet" type="text/css" href="Css/Estilos.css">
	<meta charset="utf-8">
</head>
<body>
<div class="contenedor">
	<header>
	<marquee BEHAVIOR="alternate"  scrollamount="2" scrolldelay="10" width="1050" height="40"><h1>Sitio Web</h1></marquee>
    <br>
    <marquee behavior="alternate" scrollamount="2" scrolldelay="10" width="170" height="20"><b>Aplicando conocimiento</b></marquee> 
	<?php include "modulos/menu.php"; ?>
		<!-- termina el menu-->
	</header>
    <div class="contenido"> 
	<h1>Convertidor</h1>
	<h1></h1>
   	<form method="GET">
	    <br>
		<p><b>Digite el valor</b></p>
		<br>
		<input type="text" required name="valor">
		<select name="conversion">
			<option value="1">Kilos a Libras </option>
			<option value="2">Libras a Kilos</option>
			<br>
		</select>
        <br></br>
		<input type="submit" value="Convertir">
		
	</form>
	<!--<h2><br>Resultado</h2>--!>
	<?php 
	//validar
	if(isset($_GET['valor']) && isset($_GET['conversion'])){
		$valor=$_GET['valor'];
		$conversion= $_GET['conversion'];
		if($conversion == 1){
            echo "<br><b><h1>Resultado</h1>"."<br>";
            echo "<br>";
            //convertir de kilos a libras
			$resultado = $valor * 2.2;
			echo $valor." Kg. equivale a ".$resultado." Libras";
		}else if($conversion == 2){
            echo "<br><b><h1>Resultado</h1>"."<br>";
            echo "<br>";
			//convertir de libras a kilos
			$resultado = $valor * 0.454;
			echo $valor." Lb. equivale a ".$resultado." Kilos";
		} else{ 
			echo "no puede realizarse la opción";
		}
	}else{
        
		echo "<br>"."No se ha realizado ninguna acción";
	}

	?>
	</div><!-- fin contenido-->

    <footer>
		<div class="separador"></div>
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