<?php

include('Conexion.php');

$ID=$_POST['id'];

$Nombre=$_POST['nombre'];

$ApellidoPaterno=$_POST['app'];

$ApellidoMaterno=$_POST['apm'];

$Telefono=$_POST['tel'];

$Tipo=$_POST['tipo'];

$conexion="insert into usuarios value('$ID','$Nombre','$ApellidoPaterno','$ApellidoMaterno','$Telefono','$Tipo')";

mysql_query($conexion);

?>
