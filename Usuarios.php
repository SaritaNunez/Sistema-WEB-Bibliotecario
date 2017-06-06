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
<br>
<style type="text/css">
.encabezado {
	color: #FFF;
}
</style>
<form action="nuevo.php" method="post">
  <div align="center">
    <table width="1132" height="277">
      <tr>
        <th width="406" height="248" scope="col"><div align="left">
          <table width="341" height="242" border="0" bgcolor="#F2F2F2">
            <tr>
           <td height="33" colspan="2" bgcolor="#585858" class="encabezado"><div align="center" class="encabezado">NUEVO USUARIO</div></td>
            </tr>
            <tr>
              <td width="117">ID:</td>
              <td width="234"><label for="ID"></label>
                <input type="text" name="ID" id="textfield7"></td>
              </tr>
            <tr>
              <td>Nombre:</td>
              <td><label for="textfield"></label>
                <input type="text" name="Nombre" id="textfield"></td>
              </tr>
            <tr>
              <td>Apellido P:</td>
              <td><label for="textfield2"></label>
                <input type="text" name="Apellido P:" id="textfield2"></td>
              </tr>
            <tr>
              <td>Apellido M:</td>
              <td><label for="textfield3"></label>
                <input type="text" name="Apellido M:" id="textfield3"></td>
              </tr>
            <tr>
              <td>Telefono:</td>
              <td><label for="textfield4"></label>
                <input type="text" name="Telefono" id="textfield4"></td>
              </tr>
            <tr>
              <td>Tipo:</td>
              <td><label for="textfield6"></label>
                <input type="text" name="Tipo" id="textfield6"></td>
              </tr>
            <tr>
              <td colspan="2"><div align="center">
                <input type="submit" name="Agregar" id="Agregar" value="Enviar">
                </div></td>
              </tr>
            </table>
        </div></th>
        <th width="680" scope="col">
          <label> Buscar por : </label>
          <select name="clave">
            <option value="ID" selected="selected">ID</option>
            <option value="Nombre">Nombre</option>
            <option value="Apellido Paterno">Apellido Paterno</option>
            <option value="Apellido Materno">Apellido Materno</option>
            <option value="Telefono">Telefono</option>
            <option value="Tipo">Tipo</option>
          </select>
          <input type="size" size="80" name="palabra">
          <input type="submit" value="Buscar" name="buscar">
        </th>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><?php
include("Conexion.php");

$usuarios = mysql_query("select * from usuarios",$conexion) or
                         die("Problemas en el select:".mysql_error());

						 
if ($reg=mysql_fetch_array($usuarios)){
echo "<table width='100%' border='1' bgcolor='#1C5999'>";
echo "<tr>";
echo "<td align='center'>";
echo "<b><font color='#FFFFFF'>ID</font></b>";
echo "</td>";
echo "<td align='center'>";
echo "<b><font color='#FFFFFF'>Nombre</font></b>";
echo "</td>";
echo "<td align='center'>";
echo "<b><font color='#FFFFFF'>ApellidoPaterno</font></b>";
echo "</td>";
echo "<td align='center'>";
echo "<b><font color='#FFFFFF'>ApellidoMaterno</font></b>";
echo "</td>";
echo "<td align='center'>";
echo "<b><font color='#FFFFFF'>Telefono</font></b>";
echo "</td>";
echo "<td align='center'>";
echo "<b><font color='#FFFFFF'>Tipo</font></b>";
echo "</td>";
echo "<td align='center'>";
echo "<b><font color='#FFFFFF'>Prestamo</font></b>";
echo "</td>";
echo "<td align='center'>";
echo "<b><font color='#FFFFFF'>Modificar</font></b>";
echo "</td>";
echo "<td align='center'>";
echo "<b><font color='#FFFFFF'>Eliminar</font></b>";
echo "</td>";
echo "</tr>";

$usuarios = mysql_query("select * from usuarios",$conexion) or
                         die("Problemas en el select:".mysql_error());

$color_tabla=1;
while ($reg=mysql_fetch_array($usuarios))
{
if ($color_tabla==1){
    echo "<tr bgcolor='#fffff'>";
        echo "<td width=10% align='center'>";
          echo $reg['ID'];
        echo "</td>";

		echo "<td width=20% align='center'>";
          echo $reg['Nombre'];
        echo "</td>";
        echo "<td width=10% align='center'>";
          echo $reg['ApellidoPaterno'];
        echo "</td>";
        echo "<td width=10% align='center'>";
          echo $reg['ApellidoMaterno'];
        echo "</td>";
        echo "<td width=10% align='center'>";
          echo $reg['Telefono'];
        echo "</td>"; 	
        echo "<td width=10% align='center'>";
          echo $reg['Tipo'];
        echo "</td>";
		 echo "<td width=10% align='center'>";
          echo $reg['Prestamos'];
		    echo "<a href='Prestamos.php'><img src='http://icon-icons.com/icons2/93/PNG/256/new_page_document_16676.png' alt='Prestamos' width='29' height='27'></a>";
        echo "</td>";
		echo "<td width=10% align='center'>";
          echo $reg['Modificar'];
		    echo "<a href='Usuarios.php'><img src='https://cdn1.iconfinder.com/data/icons/prettyoffice9/256/edit-validated.png' alt='modificar' width='29' height='27'></a>";
        echo "</td>";
		 echo "<td width=10% align='center'>";
          echo $reg['Eliminar'];
		    echo "<a href='Usuarios.php'><img src='http://icon-icons.com/icons2/20/PNG/256/delete_delete_deleteusers_delete_male_user_maleclient_2348.png' alt='modificar' width='29' height='27'></a>";
        echo "</td>";
    echo "</tr>";
	$color_tabla=2;
}
else  {
    echo "<tr bgcolor='#fffff'>";
        echo "<td width=10% align='center'>";
          echo $reg['ID'];
        echo "</td>";
          echo "<td width=10% align='center'>";
          echo $reg['Nombre'];
        echo "</td>";
        echo "<td width=10% align='center'>";
          echo $reg['ApellidoPaterno'];
        echo "</td>";
        echo "<td width=10% align='center'>";
          echo $reg['ApellidoMaterno'];
        echo "</td>";
        echo "<td width=10% align='center'>";
          echo $reg['Telefono'];
        echo "</td>"; 	
        echo "<td width=10% align='center'>";
          echo $reg['Tipo'];
        echo "</td>";
	echo "<td width=10% align='center'>";
          echo $reg['Prestamos'];
		  echo "<a href='Prestamos.php'><img src='http://icon-icons.com/icons2/93/PNG/256/new_page_document_16676.png' alt='Prestamos' width='29' height='27'></a>";
        echo "</td>";
		echo "<td width=10% align='center'>";
          echo $reg['Modificar'];
		  echo "<a href='Usuarios.php'><img src='https://cdn1.iconfinder.com/data/icons/prettyoffice9/256/edit-validated.png' alt='modificar' width='29' height='27'></a>";
        echo "</td>";
		echo "<td width=10% align='center'>";
          echo $reg['Eliminar'];
		   echo "<a href='Usuarios.php'><img src='http://icon-icons.com/icons2/20/PNG/256/delete_delete_deleteusers_delete_male_user_maleclient_2348.png' alt='modificar' width='29' height='27'></a>";
        echo "</td>";
	echo "</tr>";
	$color_tabla=1;
}  
}
echo "</table>";
}
else {
echo "<div align=center>";
echo "<font color=red size=18>No hay registros cargados. Presione en Agregar Contactos</font>";
echo "</div>";
}

mysql_close($conexion);
?></td>
      </tr>
    </table>
  </div>
</form>
<br>
</body>
<div class="footer" align="center">
<p class="rights"><p>
</div>
</html>