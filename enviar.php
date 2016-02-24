<html>
    <head>
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
    <center><h1>Formulario Completo</h1></center>
    <br>
    <?php
    
    //conectar
        $registra="registra";
        $tabla1="tabla1";
        $conexion=mysql_connect("localhost","root","root");
        
        //seleccionamos la base de datos
        mysql_select_db($registra,$conexion);
        
        //recibir
        
        $Nombre=strip_tags($_POST['Nombre']);
        $Email=strip_tags($_POST['Email']);
        $Mensaje=strip_tags($_POST['Mensaje']);
        $query=mysql_query('SELECT * FROM tabla1 WHERE Nombre="'.mysql_real_escape_string($Nombre).'"');
        
        if($existe=mysql_fetch_object($query))
        {
            echo '<b>El nombre</b> '."<h4>".$Nombre."</h4>".' <b>ya esta registrado en nuestro sistema</b>'."<br>";
            echo "<br>";
            echo 'Por favor, intente con otro nombre'."<br>";
        }
        else
        {
            $meter=mysql_query('INSERT INTO tabla1
            (Nombre, Email, Mensaje)values
            ("'.mysql_real_escape_string($Nombre).'",
            "'.mysql_real_escape_string($Email).'",
            "'.mysql_real_escape_string($Mensaje).'")');
            
            if($meter)
            {
                echo"<center>";
                echo'Gracias por registrarse, su mensaje sera atendido muy pronto'."<br>";
                echo 'Saludos!!';
                echo"</br>";
            }
            else
            {
                echo"<center>";
                echo'Hubo un error en el registro o usuario ya existe.';
                echo"</br>";
                
            }
        }
    
    
    
    //recibimos las variables
    $nombre=$_POST['nombre'];
    $email=$_POST['email']; 
    $pais=$_POST['pais'];
    $nombre=$_GET['nombre'];
    $email=$_GET['email']; 
    $pais=$_GET['pais']; 
    ?>
    <br>
    <h2>Nombre : <?php echo $Nombre; ?></h2>
    <h2>Email : <?php echo $Email; ?></h2>
    <h2>Mensaje : <?php echo $Mensaje; ?></h2>
    <br>
    <br>
    
    <form action="listaregistro.php" method="post">
            <button>Ver Lista de Registrados</button>
        </form>
</body>
</html>




























