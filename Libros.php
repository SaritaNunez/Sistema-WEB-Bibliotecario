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
           <td height="33" colspan="2" bgcolor="#585858" class="encabezado"><div align="center" class="encabezado">NUEVO LIBRO</div></td>
            </tr>
            <tr>
              <td width="117">ISBN:</td>
              <td width="234"><label for="ID"></label>
                <input type="text" name="ISBN:" id="textfield7"></td>
              </tr>
            <tr>
              <td>Titulo:</td>
              <td><label for="textfield"></label>
                <input type="text" name="Titulo:">
              </tr>
            <tr>
              <td>Autor(es):</td>
              <td><label for="textfield2"></label>
                <input type="text" name="Autor(es):">
              </tr>
			  <tr>
              <td>Edicion:</td>
              <td><label for="textfield3"></label>
                <input type="text" name="Edicion:" id="textfield3"></td>
              </tr>
            <tr>
              <td>Editorial:</td>
              <td><label for="textfield4"></label>
                <input type="text" name="Editorial:" id="textfield4"></td>
              </tr>
            <tr>
              <td>No. Paginas:</td>
              <td><label for="textfield6"></label>
                <input type="text" name="No. Paginas:" id="textfield6"></td>
              </tr>
			   <tr>
              <td>Estatus:</td>
              <td><label for="textfield6"></label>
                <input type="text" name="Estatus:" id="textfield6"></td>
              </tr>
			   <tr>
              <td>Imagen</td>
              <td><label for="textfield7"></label>
                <input type="text" name="textfield" id="textfield7">
                <input type="submit" name="Agregar2" id="Agregar2" value="Subir"></td>
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
		<option value="ISBN">ISBN</option>
		<option value="Titulo">Titulo</option>
		<option value="Autor(es)">Autor(es)</option>
		<option value="Edicion">Edicion</option>
		<option value="Editorial">Editorial</option>
		<option value="No. Paginas">No. Paginas</option>
          </select>
          <input type="size" size="80" name="palabra">
          <input type="submit" value="Buscar" name="buscar">
        </th>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>
<?php

include("Conexion.php");

$libros = mysql_query("select * from libros",$conexion) or
                         die("Problemas en el select:".mysql_error());

						 
if ($reg=mysql_fetch_array($libros)){
echo "<table width='100%' border='1' bgcolor='#1C5999'>";
echo "<tr>";
echo "<td align='center'>";
echo "<b><font color='#FFFFFF'>ISBN</font></b>";
echo "</td>";
echo "<td align='center'>";
echo "<b><font color='#FFFFFF'>Titulo</font></b>";
echo "</td>";
echo "<td align='center'>";
echo "<b><font color='#FFFFFF'>Autor(es)</font></b>";
echo "</td>";
echo "<td align='center'>";
echo "<b><font color='#FFFFFF'>Edicion</font></b>";
echo "</td>";
echo "<td align='center'>";
echo "<b><font color='#FFFFFF'>Editorial</font></b>";
echo "</td>";
echo "<td align='center'>";
echo "<b><font color='#FFFFFF'>No. Paginas</font></b>";
echo "</td>";
echo "<td align='center'>";
echo "<b><font color='#FFFFFF'>Estatus</font></b>";
echo "</td>";
echo "<td align='center'>";
echo "<b><font color='#FFFFFF'>Modificar</font></b>";
echo "</td>";
echo "<td align='center'>";
echo "<b><font color='#FFFFFF'>Eliminar</font></b>";
echo "</td>";
echo "</tr>";

$libros = mysql_query("select * from libros",$conexion) or
                         die("Problemas en el select:".mysql_error());

$color_tabla=1;
while ($reg=mysql_fetch_array($libros))
{
if ($color_tabla==1){
    echo "<tr bgcolor='#fffff'>";
        echo "<td width=10% align='center'>";
          echo $reg['ISBN'];
        echo "</td>";

		echo "<td width=10% align='center'>";
          echo $reg['Titulo'];
        echo "</td>";
        echo "<td width=10% align='center'>";
          echo $reg['Autor(es)'];
        echo "</td>";
        echo "<td width=10% align='center'>";
          echo $reg['Edicion'];
        echo "</td>";
        echo "<td width=10% align='center'>";
          echo $reg['Editorial'];
        echo "</td>"; 	
        echo "<td width=10% align='center'>";
          echo $reg['No. Paginas'];
        echo "</td>";
		      echo "<td width=10% align='center'>";
          echo $reg['Estatus'];
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
          echo $reg['ISBN'];
        echo "</td>";
          echo "<td width=10% align='center'>";
          echo $reg['Titulo'];
        echo "</td>";
        echo "<td width=10% align='center'>";
          echo $reg['Autor(es)'];
        echo "</td>";
        echo "<td width=10% align='center'>";
          echo $reg['Edicion'];
        echo "</td>";
        echo "<td width=10% align='center'>";
          echo $reg['Editorial'];
        echo "</td>"; 	
        echo "<td width=10% align='center'>";
          echo $reg['No. Paginas'];
        echo "</td>";
		      echo "<td width=10% align='center'>";
          echo $reg['Estatus'];
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