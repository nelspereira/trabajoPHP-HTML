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
   
   
   
   
   
   
    <?php
    //indica la base de datos y la tabla
    $base="baseautos";
    $tabla="auto";
    $conec=mysql_connect("localhost","root","root");
    mysql_select_db($base,$conec);
    //se desarrollo el select
    $result=mysql_query("select idauto,marca,agno,modelo,cilindro,precio,imagen from $tabla",$conec);
    //uso ahora del mysql_fetch_array =>asociativo
    $cuantos=mysql_query("select count(*)as valor from $tabla",$conec);
    echo "<head><title>TELESUP - Conexion a base de datos</title></head>";
    //calcular numero de clientes
    $cuantos=mysql_fetch_array($cuantos);
    $cuantos['valor'];
    //se genera una tabla para mostrar los datos
    echo "<br><h2><b>Total de autos en stock:<font color=blue>".$cuantos['valor']."</font></b></h2>";
    echo "<hr>";
    echo "<center><table border='2' width=85%> \n";
    echo "<tr bgcolor='yellow'><th>Codigo</th><th>Marca</th><th>Modelo</th>
    <th>Año</th><th>Cilindro</th><th>Precio</th><th>Imagen</th></tr> \n";
    while($row=mysql_fetch_array($result)){
        echo "<tr><th>$row[idauto]</th><th>$row[marca]</th><th>$row[modelo]</th><th>$row[agno]</th>
            <th>$row[cilindro]</th><th>$row[precio]</th>
            <th><img src='$row[imagen]' width=150 height=100></th></tr>";
    }
    echo "</table> \n";
    ?>
    
</body>

</html>
