<html>
<head>
<link rel='stylesheet' type='text/css' href='container.css' media='all'>
</head>
<body>
<div class="clip-text clip-text_fifteen clip-text--no-textzone">TECbook</div>
<br><br>
<div align="center">
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
<input type="submit" value="Buscar" name="buscar" 
	</div>
<br>
<div align="center">
<br><br>
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
          echo $reg['Autores'];
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
?>
<br><br><br>
  <div align="center">
	<a href="index.html"><font color="00000" size="6">Volver al inicio de sesion</a>
	</div>
	<br><br><br>
</body>
<div class="footer" align="center">
<p class="rights"><p>
</div>
</html>