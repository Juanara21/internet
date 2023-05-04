<?php 

	$conexion=mysqli_connect('localhost','root','','net');

$tiempo=$_GET['tiempo'];
$fecha=$_GET['fecha'];
$costo=$_GET['costo'];

$query = "INSERT INTO tiempo SET Tiempo='$tiempo', Fecha='$fecha', Costo='$costo'";
mysqli_query($conexion,$query);

header("Location: registroT.php");



 ?>