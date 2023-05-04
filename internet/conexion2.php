<?php 

	$conexion=mysqli_connect('localhost','root','','net');

$impresiones=$_GET['copias'];
$fecha=$_GET['fecha'];
$precio=$_GET['costoc'];
$tipo=$_GET['tipo'];

$query = "INSERT INTO impr SET impresiones='$impresiones', fecha='$fecha', precio='$precio', Tipo='$tipo'";
mysqli_query($conexion,$query);


header("Location: registroT.php");


 ?>