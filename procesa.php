<?php
include ("Conexion.php");
if(isset ($_POST ['id']) && !empty ($_POST ['id']) && 
isset ($_POST ['nombre']) && !empty ($_POST ['nombre']) &&
isset ($_POST ['app']) && !empty ($_POST ['app']) &&
isset ($_POST ['tel']) && !empty ($_POST ['tel']) &&
isset ($_POST ['apm']) && !empty ($_POST ['apm']) &&
isset ($_POST ['tipo']) && !empty ($_POST ['tipo'])) 
{
	$con= mysql_connect($hostname,$user,$pass) or die ("problemas al conectar");
	mysql_select_db($db,$con) or die ("problemas al conectar la bd");
	mysql_query("INSERT INTO usuarios (ID,Nombre,Apellido Paterno,Apellido Materno,Telefono,Tipo) VALUES ('$_POST(id)','$_POST(nombre)','$_POST(app)','$_POST(tel)','$_POST(apm)','$_POST(tipo)')",$con);
echo "datos insertados";
}else{
	echo "problemas al insertar datos";
}
?>