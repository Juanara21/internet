<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>mostrar datos</title>
	<LINK rel="stylesheet" href="css/style2.css">
	<center><img src="css/imagenes/Interconectados 2.png" width="800" height="150px;"></center>
</head>
<body>
	<center><a href="index.php" class="bu bu-green">Nuevo registro</a>
		<a href="nuevo.php?fecha=<?php echo date("d/m/Y"); ?>" class="bu bu-green">Total del Dia</a>
	</center>

<center><div class="barra" align="left"><CENTER><H4>--DATOS ALMACENADOS DE VENTA DE TIEMPO--</H4></CENTER></div></center>
<br>
<input type="hidden" name="Losee" value="3,0">

<strong><div id="tab">
	<CENTER><table  border="1" width="50%"  >
		<thead>
		
			
		
	
		<tr>
			<td>Fecha</td>
			<td>Tiempo</td>
			<td>Valor del Tiempo</td>
			
			

		</tr>
	</thead>
		<?php 

	$suma=0;
	$conexion=mysqli_connect('localhost','root','','net');


		$sql="SELECT * from tiempo";
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
	<CENTER><table  border="1" width="50%"  >
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
		$sql="SELECT * from copias";
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
	<CENTER><table  border="1" width="50%"  >
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


		$sql="SELECT * from impr";
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
<center><div class="barra" align="right"><CENTER><H4>--DATOS ALMACENADOS DE VENTA DE SCANNERS--</H4></CENTER></div></center>
<br>
<input type="hidden" name="Losee" value="3,0">

<strong><div id="tab">
	<CENTER><table  border="1" width="50%"  >
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

		$sql="SELECT * from scanners";
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

	


</strong>
</body>
</html>