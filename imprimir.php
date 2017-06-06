<html>
<head>
<title> imprimir </title>
<body>
<?php
$nom=$_POST['nombre'];
$ap=$_POST['ap'];
$am=$_POST['am'];
$edad=$_POST['edad'];
$carrera=$_POST['carrera'];
$fecha=$_POST['fecha'];
$sexo=$_POST['RadioGroup1'];
$com=$_POST['com'];

echo "Nombre: " . $nom . "<br>";
echo "Apellido Paterno: " . $ap . "<br>";
echo "Apellido Materno: " . $am . "<br>";
echo "Edad: " . $edad . "<br>";
echo "Carrera: " . $carrera . "<br>";
echo "Fecha: " . $fecha . "<br>";
echo "Sexo: " . $sexo . "<br>";
echo "Comentarios: " . $com . "<br>";
?>
</body>
</html>