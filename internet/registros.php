<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>mostrar datos</title>
	<LINK rel="stylesheet" href="css/style2.css">
	<center><img src="css/imagenes/Interconectados 2.png" width="800" height="150px;"></center>
</head>
<body>
<center><div class="barra" align="left"><CENTER><H4>--DATOS ALMACENADOS DE CREDITOS HECHOS--</H4></CENTER></div></center>
<br>
<input type="hidden" name="Losee" value="3,0">

<strong><div id="tab">
	<table  border="1" width="10%"  >
		<thead>
		
			
		
	
		<tr>
			<td>ID</td>
			<td>Nombres</td>
			<td>Documento</td>
			<td>Copias</td>
			<td>Valor Copias</td>
			<td>Impresiones</td>
			<td>Tipo de Impresiones</td>
			<td>Valor de Impresiones</td>
			<td>Tiempo</td>
			<td>Valor del Tiempo</td>
			<td>Scanners</td>
			<td>Tipo de scanners</td>
			<td>Valor de scanners</td>
			<td>Fecha</td>
			<td>Total</td>

			<td colspan="1">Operaciones</td>
		</tr>
	</thead>
		<?php 


	$conexion=mysqli_connect('localhost','root','','net');


		$sql="SELECT * from creditos";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['ID'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['documento'] ?></td>
			<td><?php echo $mostrar['copias'] ?></td>
			<td><?php echo $mostrar['valorc'] ?></td>
			<td><?php echo $mostrar['impresiones'] ?></td>
			<td><?php echo $mostrar['TipoI'] ?></td>
			<td><?php echo $mostrar['valori'] ?></td>
			<td><?php echo $mostrar['tiempo'] ?></td>
			<td><?php echo $mostrar['valort'] ?></td>
			<td><?php echo $mostrar['scanners'] ?></td>
			<td><?php echo $mostrar['tipoS'] ?></td>
			<td><?php echo $mostrar['valors'] ?></td>
			<td><?php echo $mostrar['fecha'] ?></td>
			<td><?php echo $mostrar['total'] ?></td>
			
			
			<td><div><a href="eliminar.php?id=<?php echo $mostrar['ID'];?>" class="bu bu-green">Eliminar</a></div></td>
		</tr>
	<?php 
	}
	 ?>
	</table>
</div>
	<center><a href="index.php" class="bu bu-green">Nuevo registro</a>
	</center>
<form action="registros.php" method="post">
	<center><br><input type="text" placeholder="Escriba el nombre completo" name="buscar" >
	<input type="submit" name="buscador" value="Buscar">
</form></center>
<?php
if (isset($_POST['buscar'])) {
	

$Nombres=$_POST['buscar'];
$sql="SELECT * from creditos WHERE nombre='$Nombres'";
		$result=mysqli_query($conexion,$sql);
			if(mysqli_num_rows($result)>0)
		{
		
		while($mostrar=mysqli_fetch_array($result)){

?>	
<table width="107%">

	<tr>
			<td><?php echo $mostrar['ID'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['documento'] ?></td>
			<td><?php echo $mostrar['copias'] ?></td>
			<td><?php echo $mostrar['valorc'] ?></td>
			<td><?php echo $mostrar['impresiones'] ?></td>
			<td><?php echo $mostrar['TipoI'] ?></td>
			<td><?php echo $mostrar['valori'] ?></td>
			<td><?php echo $mostrar['tiempo'] ?></td>
			<td><?php echo $mostrar['valort'] ?></td>
			<td><?php echo $mostrar['scanners'] ?></td>
			<td><?php echo $mostrar['tipoS'] ?></td>
			<td><?php echo $mostrar['valors'] ?></td>
			<td><?php echo $mostrar['fecha'] ?></td>
			<td><?php echo $mostrar['total'] ?></td>
			
			
			<td><div><a href="eliminar.php?id=<?php echo $mostrar['ID'];?>" class="bu bu-green">Eliminar</a></div></td>
		</tr>
</table>
	<?php 
	}
 }
 else
 {
 	echo "<center><h5>No se han encontraron coincidencias, por favor rectique los datos ingresados e ingrese nuevamente</h5></center>";
 }
 
}
	 ?>
</strong>
</body>
</html>