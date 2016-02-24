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
<?php
    $clave=$_REQUEST['txtclave'];
    if ($clave=="")
    {
        echo "<h2>En estos momentos disponemos en nuestro stock 30 autos</h2>"."<br>";
        echo "<h2> Por favor: Ingrese un numero dentro de ese rango</h2>"."<br>";
        echo "<h1>Gracias</h1>";
        ?>
        
         <form action="busqueda.php" method="post">
            <button><b>Volver a buscar</b></button>
        </form>
        
        <?php
        
        echo "<hr>";
        echo "</body></html>";
        exit; //salir del codigo php
        
    }
    
    
   
    
    $base="baseautos";
    $tabla="auto";
    $link=mysql_connect("localhost","root","root");
    mysql_select_db($base,$link);
    $result=mysql_query("select * from $tabla where idauto like '$clave'",$link);
    $cant=mysql_query("select count(*) as valor from $tabla where idauto like '$clave'",$link);
    $cant=mysql_fetch_array($cant);
    echo "<h1>Busqueda de Auto:</h1>"."<br>";
    echo "<center><b>Se han encontrado : $cant[valor] auto</b></center>";
    if($row=mysql_fetch_array($result))
    {
        echo "<center><table border='1' width='60%'>";  //mostraremos los nombres de las tablas
        echo "<tr bgcolor='lightyellow'><th>Marca</th><th>Modelo</th><th>Año</th><th>Precio</th></tr>";
        do
        {
            echo "<tr>";
            echo "<td>".$row["marca"]."</td> \n";
            echo "<td>".$row["modelo"]."</td> \n";
            echo "<td>".$row["agno"]."</td> \n";
            echo "<td>".$row["precio"]."</td> \n";
            echo "<tr>";
            echo "<tr>";
            echo "<td colspan=4><center><img width=70% heigth=70% src=".$row["imagen"]." />";
        }
        while($row=mysql_fetch_array($result));
        echo "</table></center> \n";
    }
    else
        {
            echo "<br>"."Parece que los datos ingresados no estan en el rango"."<br>"; 
        
        echo "<br>"."</br>";
         echo "<h2>En estos momentos disponemos en nuestro stock 30 autos</h2>"."<br>";
        echo "<h2> Por favor: Ingrese un numero dentro de ese rango</h2>"."<br>";
        echo "<h1>Gracias</h1>";
        ?>
        
         <form action="busqueda.php" method="post">
            <button><b>Volver a buscar</b></button>
        </form>
        
        <?php
        
        
        
        
        
        }   
    
    ?> 
    
     
    
</body>
</html>