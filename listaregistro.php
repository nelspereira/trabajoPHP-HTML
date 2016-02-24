<html>
    <body>    
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
    
    <?php
     
        //indicar la base de datos y la tabla
        $registra="registra";
        $tabla1="tabla1";
        $conexion=mysql_connect("localhost","root","root");
        mysql_select_db($registra,$conexion);
        
        //se desarrolla el select
        $result=mysql_query("select Nombre,Email,Mensaje from $tabla1",$conexion);
        $cuantos=mysql_query("select count(*) from $tabla1",$conexion);
        //var_dump($cuantos);
        //echo"<head><title>Telesup - conexion de base de datos</title></head>";
        
        //calcular el numero de clientes
        //$cuantos=mysql_fetch_row($cuantos);
        //$cuantos=$cuantos[0];
        
        //se genera la tabla para mostrar los datos
        //echo"<br><h2><b>total de empleados: <font color =blue>$cuantos</font></b></h2>";
        echo"<hr>";
        echo "<br>";
        echo"<center><table border='1' width=1055>\n";
        echo"<tr bgcolor='#F75865'>
        <th>Nombre</th><th>Email</th><th>Mensaje</th>
        </tr>\n";
        while ($row=mysql_fetch_row($result)){
            echo"<tr><td>$row[0]</td>
            <td>$row[1]</td>
            <td>$row[2]</td></tr>\n";   
        } 
    ?>                   
    </body>
    <form action="formulario.php" method="post">
        <button>Volver al Formulario</button>
        <br></br>
    </form> 
</html>


