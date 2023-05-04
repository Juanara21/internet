<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Planilla Interconectados Chojuannet</title>
	<script type="text/javascript">
		
			function llamar()
			{
				var tiempo=document.getElementById("tiempo").value
				

				if(tiempo=='15 min')
				{

					document.getElementById("costo").value="300"
				}

				else if(tiempo=='30 min')
				{

					document.getElementById("costo").value="600"
				}
				else if(tiempo=='45 min')
				{

					document.getElementById("costo").value="900"
				}
				else if(tiempo=='1 hora')
				{

					document.getElementById("costo").value="1200"
				}
				else if(tiempo=='1 hora y 15')
				{

					document.getElementById("costo").value="1500"
				}
				else if(tiempo=='1 hora y 30')
				{

					document.getElementById("costo").value="1800"
				}
				else if(tiempo=='1 hora y 45')
				{

					document.getElementById("costo").value="2100"
				}
				else if(tiempo=='2 hora')
				{

					document.getElementById("costo").value="2400"
				}
				else if(tiempo=='2 hora y 15')
				{

					document.getElementById("costo").value="2700"
				}
				else if(tiempo=='2 hora y 30')
				{

					document.getElementById("costo").value="3000"
				}else if(tiempo=='2 hora y 45')
				{

					document.getElementById("costo").value="3300"
				}
				else if(tiempo=='3 hora')
				{

					document.getElementById("costo").value="3600"
				}
				else if(tiempo=='3 hora y 15')
				{

					document.getElementById("costo").value="3900"
				}else if(tiempo=='3 hora y 30')
				{

					document.getElementById("costo").value="4200"
				}
				else if(tiempo=='3 hora y 45')
				{

					document.getElementById("costo").value="4500"
				}
				else if(tiempo=='4 hora')
				{

					document.getElementById("costo").value="4800"
				}

				
			}


	</script>
</head>
<body>
	<br>
	<br>
	<CENTER><div style="margin-top: 150px;">
		<h1>Formulario para acreditar</h1>
		<a href="registros.php" class="bu bu-green">Regresar</a>	
		<br>
		<br>
	<form action="conexionc.php" method="get">
		NOMBRE: <input type="text" name="nombre" required/>
		TIEMPO: <select id="tiempo" name="tiempo" required/>
			<option value="">Seleccione el tiempo</option>
			<option value="15 min">00:15 min</option>
			<option value="30 min">00:30 min</option>
			<option value="45 min">00:45 min</option>
			<option value="1 hora">01:00 hora</option>
			<option value="1 hora y 15">01:15 hora</option>
			<option value="1 hora y 30">01:30 hora</option>
			<option value="1 hora y 45">01:45 hora</option>
			<option value="2 hora">02:00 hora</option>
			<option value="2 hora y 15">02:15 hora</option>
			<option value="2 hora y 30">02:30 hora</option>
			<option value="2 hora y 45">02:45 hora</option>
			<option value="3 hora">03:00 hora</option>
			<option value="3 hora y 15">03:15 hora</option>
			<option value="3 hora y 30">03:30 hora</option>
			<option value="3 hora y 45">03:45 hora</option>
			<option value="4 hora">04:00 hora</option>
			



		</select>
		<br>
		FECHA: <input name="fecha" type="text" id="fecha" value="<?php echo date("d/m/Y"); ?>" size="10" /><br>
		<input type="hidden" id="costo" name="costo">
		<input type="submit" value="Aceptar" onclick="llamar()">
	</form></div></CENTER>
</body>
</html>