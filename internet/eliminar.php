<?php 

	$conexion=mysqli_connect('localhost','root','','net');





$n=$_REQUEST['id'];



$query = "DELETE FROM creditos WHERE ID='$n' "; 


mysqli_query($conexion, $query);


header("Location: registros.php");








?>