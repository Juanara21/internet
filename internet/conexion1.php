<?php 

	$conexion=mysqli_connect('localhost','root','','net');

$copias=$_GET['copias'];
$fecha=$_GET['fecha'];
$precio=$_GET['costoc'];

$query = "INSERT INTO copias SET copias='$copias', fecha='$fecha', precio='$precio'";
mysqli_query($conexion,$query);

header("Location: registroT.php");


 ?>