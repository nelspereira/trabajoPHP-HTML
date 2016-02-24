<html>
<body>
<title>Sitio Web</title>
	<link rel="stylesheet" type="text/css" href="Css/Estilos.css">
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
</header>

<?
// Configura los datos de tu cuenta
$dbhost='localhost';
$dbusername='root';
$dbuserpass='root';
$dbname='usuarios10';
//session_start();
// Conectar a la base de datos
mysql_connect ($dbhost, $dbusername, $dbuserpass);
mysql_select_db($dbname) or die('Cannot select database');
if ($_POST['username']) {
//Comprobacion del envio del nombre de usuario y password
$username=$_POST['username'];
$password=$_POST['password'];
if ($password==NULL) {
echo "La password no fue enviada";
}else{
$query = mysql_query("SELECT username,password FROM users WHERE username = '$username'") or die(mysql_error());
$data = mysql_fetch_array($query);
if($data['password'] != $password) {
echo "<br>";
echo "<br>";
echo "<b><center><h3>Usuario o Password incorrectos de lo contrario no debes estar registrado</h3>";
echo "<br>";
echo "<br>";
?>  
    
<form action="trabajoweb.php" method="post"> 
<br>
<button>Volver</button>
<br>
</form>
<br>
<p><b>o</b></p><br>
<form action="form_registro.php" method="post"> 

<button>Registrarse</button>
<br>
</form>

<?    
    
}else{
$query = mysql_query("SELECT username,password FROM users WHERE username = '$username'") or die(mysql_error());
$row = mysql_fetch_array($query);
$_SESSION["s_username"] = $row['username'];
 
echo "<br>";
echo "<center><b><h1>Bienvenido</h1>";
    
    

if (isset($_SESSION['s_username'])) {
    echo "<br>";
    echo ""."<h2>".$_SESSION['s_username']."<br>"."</h2>"."<br>".", Vamos ...dale click e ingresa.....
    
    hay  muchas novedades para ti!"."<br>";
}
   
    
    
    
    
?>    
<form action="index.php" method="post"> 
<br>
<button>Ingresar al Sistema</button>
<br>
</form>

<?
}
}
}
?>
<br>
 <marquee behavior="alternate" scrollamount="2" scrolldelay="10" width="736" height="20"><p><b><font size=4>Además en este sitio se va a aplicar los conocimientos en PHP para un desarollo más productivo.</font></b></p>
	</div><!-- fin contenido-->
    </marquee>
	

	<footer>
		<div class="separador"></div>
		<br>
        <p><b>Copyright</b></p>
        <p><b>Diseñado por Nelson Fabrizzio Pereira Valer</b></p>
        <p><b>Universidad Telesup Facultad de Ingenieria de Sistemas e Informatica</b></p>
        <p><b>Lima, Febrero 2016</b></p>


</form>
</body>
</html> 





