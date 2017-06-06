<?php
include("Conexion.php");
mysql_query("insert into usuarios(ID,Nombre,ApellidoPaterno,ApellidoMaterno,Telefono,Tipo) values ('$_REQUEST[id]','$_REQUEST[nombre]','$_REQUEST[app]','$_REQUEST[apm]','$_REQUEST[tel]','$_REQUEST[tipo]')",$Conexion) or
die ("Problemas en el select".mysql_error());
mysql_close($Conexion);
echo "El Usuario se ha dado de alta";
?>
