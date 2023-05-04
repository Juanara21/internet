<?php 

	$conexion=mysqli_connect('localhost','root','','net');

$nombre=$_GET['nombre'];
$documento=$_GET['documento'];
$copias=$_GET['copias'];
$Impr=$_GET['Impr'];
$timpre=$_GET['tipo'];
$tiempo=$_GET['tiempo'];
$scanners=$_GET['scanners'];
$tsca=$_GET['tipo1'];
$costo=$_GET['costo'];
$costoc=$_GET['costoc'];
$costoS=$_GET['costoS'];
$costoi=$_GET['costoi'];
$total=$_GET['total'];
$fecha=$_GET['fecha'];


$query = "INSERT INTO creditos SET nombre='$nombre', documento='$documento', copias='$copias', valorc='$costoc', impresiones='$Impr', TipoI='$timpre', valori='$costoi', tiempo='$tiempo', valort='$costo', scanners='$scanners', tipoS='$tsca', valors='$costoS', fecha='$fecha', total='$total'";
mysqli_query($conexion,$query);

header("Location: registros.php");



 ?>