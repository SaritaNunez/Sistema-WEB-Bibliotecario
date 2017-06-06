<? 
//Inicio la sesión 
session_start(); 
//COMPRUEBA QUE EL USUARIO ESTA AUTENTICADO
if ($_SESSION[inicio] == true) {
	
?>
<html>
<head>
<link rel='stylesheet' type='text/css' href='container.css' media='all'>
<link rel='stylesheet' type='text/css' href='estiloM.css' media='all'>
</head>
<body>
<?
}else{
	
?>
<script type="text/javascript">
alert("No has iniciado sesion");
</script>
<script>
location.href="index.html";
</script>
<?
}
?>
<div class="clip-text clip-text_fifteen clip-text--no-textzone">TECbook</div>
<br>
        <nav>
		<div align="center" color="#1C5999">
            <ul class="fancyNav">
                <li id="news"><a href="Usuarios.php">Usuarios</a></li>
				<li id="news"><a href="Libros.php">Libros</a></li>
                <li id="services"><a href="#Status">Status</a></li>
                <li id="contact"><a href="cerrar.php">Cerrar sesion</a></li>
            </ul>
			</div>
        </nav>
  
</body>
</html>