<?php
	include("Conexion.php");

$usuarios = mysql_query("select * from usuarios",$conexion) or
                         die("Problemas en el select:".mysql_error());
	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<div align="center">
<table border=1 width="82%">
			<thead>
				<tr>
                    <td width="5%"><b>ID</b></td>
					<td width="10%"><b>Nombre</b></td>
					<td width="13%"><b>Apellido Paterno</b></td>
					<td width="17%"><b>Apellido Materno</b></td>
					<td width="9%"><b>Telefono</b></td>
                    <td width="14%"><b>Tipo</b></td>
                    <td width="14%"><b>Modificar</b></td>
                    <td width="18%"><b>Eliminar</b></td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
                        	<td><?php echo $row['ID'];?>
							</td>
							<td><?php echo $row['Nombre'];?>
							</td>
							<td>
								<?php echo $row['ApellidoPaterno'];?>
							</td>
                            <td>
								<?php echo $row['ApellidoMaterno'];?>
							</td>
                            <td>
								<?php echo $row['Telefono'];?>
							</td>
                            <td>
								<?php echo $row['Tipo'];?>
							</td>
							<td>
								<div align="center"><a href="Usuarios.php?ID=<?php echo $row['ID'];?>"><img src="edit.png" alt="modificar" width="29" height="27"></a></div>
							</td>
							<td>
								<div align="center"><a href="eliminarusuario.php?ID=<?php echo $row['ID'];?>"><img src="eliminar.jpg" alt="modificar" width="29" height="25"></a></div>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
</div>
</body>
	</html>