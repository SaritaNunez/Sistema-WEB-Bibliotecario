<?php

include("Conexion.php");

$libros = mysql_query("select * from libros",$conexion) or
                         die("Problemas en el select:".mysql_error());

						 
if ($reg=mysql_fetch_array($registros)){

echo "<table width='100%' border='1' bgcolor='#000000'>";
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
    echo "<tr bgcolor='#FFFFFF'>";
        echo "<td width=10%>";
          echo $reg['ISBN'];
        echo "</td>";

		echo "<td width=10%>";
          echo $reg['Titulo'];
        echo "</td>";
        echo "<td width=10%>";
          echo $reg['Autores'];
        echo "</td>";
        echo "<td width=10%>";
          echo $reg['Edicion'];
        echo "</td>";
        echo "<td width=10%>";
          echo $reg['Editorial'];
        echo "</td>"; 	
        echo "<td width=10%>";
          echo $reg['No. Paginas'];
        echo "</td>";
    echo "</tr>";
	$color_tabla=2;
}
else  {
    echo "<tr bgcolor='#F9F9F9'>";
        echo "<td width=10%>";
          echo "<td width=10%>";
          echo $reg['Titulo'];
        echo "</td>";
        echo "<td width=10%>";
          echo $reg['Autores'];
        echo "</td>";
        echo "<td width=10%>";
          echo $reg['Edicion'];
        echo "</td>";
        echo "<td width=10%>";
          echo $reg['Editorial'];
        echo "</td>"; 	
        echo "<td width=10%>";
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