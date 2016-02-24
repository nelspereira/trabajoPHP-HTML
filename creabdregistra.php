<?php
$conexion=mysql_connect("localhost","root","root");
if(!$conexion){
die('no he podido conectar: '.mysql_error());   
}

if(mysql_query("CREATE DATABASE registra",$conexion))
{
echo"Se ha creado la base de datos exitosamente";
}
else{
echo"No se ha podido crear la base de datos por el siguiente error: ".mysql_error();
}

//preparo esta peticion

mysql_select_db("registra",$conexion);
$sql="CREATE TABLE tabla
(
Nombre varchar(25),
Email varchar(25),
Mensaje varchar(200)
)";

$sql="CREATE TABLE tabla1
(
Nombre varchar(25),
Email varchar(25),
Mensaje varchar(200)
)";


//ejecuto la peticion
mysql_query($sql,$conexion);

//cerrar la conexion
mysql_close($conexion);

?>