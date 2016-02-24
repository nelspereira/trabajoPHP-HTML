<html>
    <body>
    <?php
        
    //conectar
        $registra="registra";
        $tabla1="tabla1";
        $conexion=mysql_connect("localhost","root","root");
        
        //seleccionamos la base de datos
        mysql_select_db($datos_completos,$conexion);
        
        //recibir
        $Nombre=strip_tags($_POST['Nombre']);
        $Email=strip_tags($_POST['Email']);
        $Mensaje=strip_tags($_POST['Mensaje']);
        $query=mysql_query('SELECT * FROM tabla1 WHERE Nombre="'.mysql_real_escape_string($Nombre).'"');
        
        if($existe=mysql_fetch_object($query))
        {
            echo'el usuario'.$Nombre.'ya existe.';
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
                echo'Usuario registrado con exito';
                echo"</br>";
            }
            else
            {
                echo'Hubo un error en el registro.';
            }
        }
        
    ?>
    
      <form action="mostrar.php" method="post">
            <button>Mostrar</button>
        </form>
    </body>
</html>