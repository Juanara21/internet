<?php 

	$conexion=mysqli_connect('localhost','root','','net');

$copias=$_GET['copias'];
$fecha=$_GET['fecha'];
$precio=$_GET['costoc'];
$tipo=$_GET['tipo'];

$query = "INSERT INTO scanners SET scanners='$copias', fecha='$fecha', precio='$precio', Tipo='$tipo'";
mysqli_query($conexion,$query);

header("Location: registroT.php");

 ?>