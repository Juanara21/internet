<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>mostrar datos</title>
	<LINK rel="stylesheet" href="css/style2.css">
	<center><img src="css/imagenes/Interconectados 2.png" width="800" height="150px;"></center>
	
</head>
<body>

<center><form action="nuevo.php" method="GET">
	FECHA: <input name="fecha" type="text" id="fecha" value="<?php echo date("d/m/Y"); ?>" size="10" />
	<input type="submit" value="Ver registro">
</form></center>
	<center><a href="index.php" class="bu bu-green">Nuevo registro</a>
		<a href="registroT.php" class="bu bu-green">Registro General</a>
	</center>
<div style="float: left; width: 600px;">
<center><div class="barra" align="left"><CENTER><H4>--DATOS ALMACENADOS DE VENTA DE TIEMPO--</H4></CENTER></div></center>
<br>
<input type="hidden" name="Losee" value="3,0">

<strong><div id="tab">
	<CENTER><table  border="1" width="100%"  >
		<thead>
		
			
		
	
		<tr>
			<td>Fecha</td>
			<td>Tiempo</td>
			<td>Valor del Tiempo</td>
			
			

		</tr>
	</thead>
		<?php 
	$fecha=$_GET['fecha'];

	$suma=0;
	$conexion=mysqli_connect('localhost','root','','net');


		$sql="SELECT * from tiempo WHERE Fecha='$fecha'";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['Fecha'] ?></td>
			<td><?php echo $mostrar['Tiempo'] ?></td>
			<td><?php echo $mostrar['Costo'] ?></td>
			<?php
			$suma+=$mostrar['Costo'];
			?>
			
		</tr>
	<?php 
	}
	 ?>
	 <tr>
	 	<td style="background-color: gray">TOTAL</td>
	 	<td colspan="2"><?php echo $suma ?></td>
	 </tr>
	</table></CENTER>
</div>
<center><div class="barra" align="left"><CENTER><H4>--DATOS ALMACENADOS DE VENTA DE COPIAS--</H4></CENTER></div></center>
<br>
<input type="hidden" name="Losee" value="3,0">

<strong><div id="tab">
	<CENTER><table  border="1" width="100%"  >
		<thead>
		
			
		
	
		<tr>
			
			<td>Fecha</td>
			<td>Copias</td>
			<td>Valor del las Copias</td>
			

		</tr>
	</thead>
		<?php 


	$conexion=mysqli_connect('localhost','root','','net');

		$suma1=0;
		$sql="SELECT * from copias WHERE Fecha='$fecha'";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['fecha'] ?></td>
			<td><?php echo $mostrar['copias'] ?></td>
			<td><?php echo $mostrar['precio'] ?></td>
			<?php
			$suma1+=$mostrar['precio'];
			?>
			
		</tr>
	<?php 
	}
	 ?>
	 <tr>
	 	<td style="background-color: gray">TOTAL</td>
	 	<td colspan="2"><?php echo $suma1 ?></td>
	 </tr>		
	</table></CENTER>
</div>
<center><div class="barra" align="left"><CENTER><H4>--DATOS ALMACENADOS DE VENTA DE IMPRESIONES--</H4></CENTER></div></center>
<br>
<input type="hidden" name="Losee" value="3,0">

<strong><div id="tab">
	<CENTER><table  border="1" width="100%"  >
		<thead>
		
			
		
	
		<tr>
			<td>Fecha</td>
			<td>Impresiones</td>
			<td>Tipo de impresiones</td>
			<td>Valor de las impresiones</td>
			
			

		</tr>
	</thead>
		<?php 

	$suma2=0;
	$conexion=mysqli_connect('localhost','root','','net');


		$sql="SELECT * from impr WHERE Fecha='$fecha'";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['fecha'] ?></td>
			<td><?php echo $mostrar['impresiones'] ?></td>
			<td><?php echo $mostrar['Tipo'] ?></td>
			<td><?php echo $mostrar['precio'] ?></td>
			<?php
			$suma2+=$mostrar['precio'];
			?>
			
			
		</tr>
	<?php 
	}
	 ?>
	 <tr>
	 	<td style="background-color: gray" colspan="2">TOTAL</td>
	 	<td colspan="2"><?php echo $suma2 ?></td>
	 </tr>
	</table></CENTER>
</div>
<center><div class="barra" align="right"><CENTER><H4>--DATOS ALMACENADOS DE VENTA DE IMPRESIONES--</H4></CENTER></div></center>
<br>
<input type="hidden" name="Losee" value="3,0">

<strong><div id="tab">
	<CENTER><table  border="1" width="100%"  >
		<thead>
		
			
		
	
		<tr>
			<td>Fecha</td>
			<td>scanners</td>
			<td>Tipo de scanners</td>
			<td>Valor de los scanners</td>
			
			

		</tr>
	</thead>
		<?php 


	$conexion=mysqli_connect('localhost','root','','net');
	$suma3=0;

		$sql="SELECT * from scanners WHERE Fecha='$fecha'";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['fecha'] ?></td>
			<td><?php echo $mostrar['scanners'] ?></td>
			<td><?php echo $mostrar['Tipo'] ?></td>
			<td><?php echo $mostrar['precio'] ?></td>
			<?php
			$suma3+=$mostrar['precio'];
			?>
			
		</tr>
	<?php 
	}
	 ?>
	 <tr>
	 	<td style="background-color: gray" colspan="2">TOTAL</td>
	 	<td colspan="2"><?php echo $suma3 ?></td>
	 </tr>
	</table></CENTER>
</div>
<?php
$total=$suma+$suma1+$suma2+$suma3;

?>
</div>
<div style="float: right; margin-top: 70px;:; width: 600px;"><table border="1" width="100%">
	<thead>
		<td>TOTAL DEL DIA</td>
		
	</thead>
	<tr>
		<TD><?php echo $total ?></TD>
	</tr>
</table>
	</div>


</strong>
</body>
</html>