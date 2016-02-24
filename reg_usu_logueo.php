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
    
   
 
	</header>
	<div class="contenido">
	<marquee  SCROLLDELAY =200 width="50%" height="60" align="bottom">
    <p><b><font size=4>Bienvenido al sitio Web, aquí puede utilizar diversas herramientas como:</font></b></p>
    <ul> 
    </marquee>
    <br>
    
     <img src="autos.jpg" align="left" border="0" width="300" height="300">
	    <img src="kilos.jpg" align="right" border="0" width="300" height="300">
    
    <?php
    //conectar
        $usuarios10="usuarios10";
        $users="users";
        $conexion=mysql_connect("localhost","root","root");
        //seleccionamos la base de datos
        mysql_select_db($usuarios10,$conexion);   
        $username=strip_tags($_POST['username']);
        $password=strip_tags($_POST['password']);
        $email=strip_tags($_POST['email']);
        $cpassword=strip_tags($_POST['cpassword']);
        if($password!=$cpassword) {
echo "Las contraseñas no coinciden";
}else{
            
            // Comprobamos si el nombre de usuario o la cuenta de correo ya existían
$checkuser = mysql_query("SELECT username FROM users WHERE username='$username'");
$username_exist = mysql_num_rows($checkuser);
$checkemail = mysql_query("SELECT email FROM users WHERE email='$email'");
$email_exist = mysql_num_rows($checkemail);
if ($email_exist>0|$username_exist>0) {
    
    
$query = mysql_query("SELECT username FROM users WHERE username = '$username'") or die(mysql_error());
$row = mysql_fetch_array($query);
$_SESSION["s_username"] = $row['username'];
    
$query1 =  mysql_query("SELECT email FROM users WHERE email = '$email'") or die(mysql_error());
$row1 = mysql_fetch_array($query1);
$_SESSION1["s_email"] = $row1['email'];
 
if (isset($_SESSION['s_username']) || ($_SESSION1['s_email'])) {
    echo "<br>";
    echo "EL nombre de usuario"."<h3>".$_SESSION['s_username']."</h3>".", o la cuenta de correo"."<h3>".$_SESSION1['s_email']."</h3>"." ya  estan en uso"."<br>";
    echo "Por favor, intente denuevo";
} 
}else{
            
            
        
        $query=mysql_query('SELECT * FROM users WHERE Nombre="'.mysql_real_escape_string($username).'"');  
            $meter=mysql_query('INSERT INTO users
            (username, password, email)values
            ("'.mysql_real_escape_string($username).'",
            "'.mysql_real_escape_string($password).'",
            "'.mysql_real_escape_string($email).'")');
           if($meter)
            {
                echo"<center>";
                echo "<b>".'Usuario registrado con exito'."<br>";
                echo"</br>";
               
               ?>
               
                <form action="trabajoweb.php" method="post">
                 
            <button>Ingresar</button>
            
        </form>
           
            <?   
               
            }
           else
           {    
                echo"<center>";
                echo'Hubo un error en el registro o usuario ya existe.';
                echo"</br>";            
            }
            
        }
        }
    ?>
  
  <!--
     
}else{
// Comprobamos si el nombre de usuario o la cuenta de correo ya existían
$checkuser = mysql_query("SELECT username FROM users WHERE username='$username'");
$username_exist = mysql_num_rows($checkuser);
$checkemail = mysql_query("SELECT email FROM users WHERE email='$email'");
$email_exist = mysql_num_rows($checkemail);
if ($email_exist>0|$username_exist>0) {
echo "EL nombre de usuario o la cuenta de correo estan ya en uso";
}else{
//Todo parece correcto procedemos con la inserccion
$query = "INSERT INTO users (username, password, email) VALUES(‘$username’,'$password’,'$email’)";
mysql_query($query) or die(mysql_error());
echo "El usuario $username ha sido registrado de manera satisfactoria.";
}
}
}
}
?>
  
  
  -->
    
    
  

  
        
        
        
    
    <form action="form_registro.php" method="post">
        <br><button>Volver a Registrar </button></br>
        </form>
</body>
</html>
