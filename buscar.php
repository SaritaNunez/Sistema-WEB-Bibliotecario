<?php
include("Conexion.php");
	$mysqli = $conexion;
	
	$salida = "";
	$query = "SELECT * FROM usuarios ORDER By ID";
	
	if(isset($_POST['consulta']));
	$q = $mysqli ->real_escape_string($_POST['consulta']);
	$query = "SELECT ID, Nombre, Apellido Paterno, Apellido Materno, Telefono, Tipo FROM usuarios 
	WHERE Nombre LIKE '%".$q."%' OR Apellido Paterno LIKE '%".$q."%' OR Apellido Materno LIKE '%".$q."%' OR Telefono LIKE '%".$q."%' OR Tipo LIKE '%".$q."%'";
	}
	$resultado =$mysqli->query($query);
	
	if($resultado->num_rows > 0){
	  $salida.="<table class='tabla_datos'>
	       <thead>
		      <tr>
			     <td>ID</td>
				 <td>Nombre</td>
				 <td>Apellido Paterno</td>
				 <td>Apellido Materno</td>
				 <td>Telefono</td>
				 <td>Tipo</td>
			</tr>
		</thead>
		<tbody>";
		
	while($fila = $resultado->fetch_assoc()){
	  $salida.="<tr>
	        <td>".$fila['ID']."</td>
			<td>".$fila['Nombre']."</td>
			<td>".$fila['Apellido Paterno']."</td>
			<td>".$fila['Apellido Materno']."</td>
			<td>".$fila['Telefono']."</td>
			<td>".$fila['Tipo']."</td>
		</tr>";
	}
	$salida.="</tbody></table>";
} else {
	$salida.="No hay datos :(";
}

	echo $salida;
	$mysqli->close();
?>

	}