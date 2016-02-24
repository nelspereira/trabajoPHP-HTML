<?
// Configura los datos de tu cuenta
$dbhost='localhost';
$dbusername='root';
$dbuserpass='root';
$dbname='usuarios10';
// Conexión a la base de datos
mysql_connect ($dbhost, $dbusername, $dbuserpass);
// Seleccion de la base de datos
mysql_select_db($dbname) or die('Cannot select database');
// Creacion de la tabla (puedes elegir otros nombres para los campos)
$query = 'CREATE TABLE users(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
username VARCHAR(30) NOT NULL,
password VARCHAR(20) NOT NULL,
email VARCHAR(40) NOT NULL)';
$result = mysql_query($query);
echo "!Tabla creada!";
?>
  