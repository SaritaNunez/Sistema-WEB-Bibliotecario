<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>sesion</title>
</head>

<body>
<?php
include("Conexion.php");
//RECOGER DATOS DE FORMULARIO

$a=$_POST['user'];
$b=$_POST['pass'];


	if($a==($SQL="Select *from administradores where User='$a'"))
		{
?>
	<script type="text/javascript">
	alert("USUARIO ADMINISTRADOR");
	</script>
	<script>
	location.href="Prestamos.php";
	</script>
<?
	 
	//COMPROBAR Q SE INGRESEN LOS DATOS
	if(!$a or !$b)
	{
?>
	<script type="text/javascript">
	alert("DEBES INGRESAR TODOS LOS DATOS");
	</script>
	<script>
	location.href="index.html";
	</script>
<?
	session_destroy();
	session_unset();
	}
	else
	{	
	//VERIFICAR Q ESTEN EN LA BASE DE DATOS
	$SQL="Select *from administradores where User='$a' and Password='$b'";
	$nom=mysql_query($SQL,$conexion);
	$nom1=mysql_fetch_array($nom);
	$user=$nom1['User'];
	$con=$nom1['Password'];
	
	//COMPARAMOS
	if($user==$a and $con==$b)
	{
	$_SESSION[inicio]=true;
	
	
?>
	<script type="text/javascript">
	alert("INICIANDO SESION");
	</script>
	<script>
	location.href="Prestamos.php";
	</script>
<?
	}
	else
	{
	
?>
	<script type="text/javascript">
	alert("NO ESTAS REGISTRADO");
	</script>
	<script>
	location.href="index.html";
	</script>
<?
	session_destroy();
	session_unset();
	
	} //FIN DE ELSE DE COMPROBAR Q ESTEN EN LA BASE DE DATOS
	
	}//FIN ELSE D Q SE INGRESEN TODOS LOS DATOS
	
	 } 
	
	
	else
	{	
	
	//COMPROBAR Q SE INGRESEN LOS DATOS
	if(!$a or !$b)
	{
?>
	<script type="text/javascript">
	alert("DEBES INGRESAR TODOS LOS DATOS");
	</script>
	<script>
	location.href="Prestamos.php";
	</script>
<?
	session_destroy();
	session_unset();
	}
	else
	{	
	//VERIFICAR Q ESTEN EN LA BASE DE DATOS
	$SQL="Select *from administradores where User='$a' and Password='$b'";
	$nom=mysql_query($SQL,$conexion);
	$nom1=mysql_fetch_array($nom);
	$nom2=$nom1['User'];
	$con=$nom1['Password'];
	
	//COMPARAMOS
	if($nom2==$a and $con==$b)
	{
	$_SESSION[inicio]=true;

?>
	<script type="text/javascript">
	alert("INICIANDO SESION");
	</script>
	<script>
	location.href="Prestamos.php";
	</script>
<?
	}
	else
	{
	
?>
	<script type="text/javascript">
	alert("NO ESTAS REGISTRADO");
	</script>
	<script>
	location.href="index.html";
	</script>
<?
	session_destroy();
	session_unset();
	
	} //FIN DE ELSE DE COMPROBAR Q ESTEN EN LA BASE DE DATOS
	
	}//FIN ELSE D Q SE INGRESEN TODOS LOS DATOS
	
	} 
	
?>



</body>
</html>
