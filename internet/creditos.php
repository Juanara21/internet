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
				
				if (tiempo=='') 
				{
				document.getElementById("costo").value="0"	
				}

				else if(tiempo=='15 min')
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



				var copias=document.getElementById("copias").value
				if (copias=='') 
				{
					document.getElementById("costoc").value="0";
				
				}
				else
				{
				var mull=parseInt(copias)*200;
				document.getElementById("costoc").value=mull;
				}
				

				var Impresiones=document.getElementById("Impr").value
				var tipo=document.getElementById("tipo").value
				if(tipo=='B y N'){
				var mull1=parseInt(Impresiones)*500;
				document.getElementById("costoi").value=mull1;
				}
				else if(tipo=='Color')
				{
				var mull1=parseInt(Impresiones)*800;
				document.getElementById("costoi").value=mull1;	
				}
				else if(tipo==0)
				{
				document.getElementById("costoi").value="0";	
				}


				var SCA=document.getElementById("scanners").value
				var tipo1=document.getElementById("tipo1").value
				if(tipo1=='PDF'){
				var mull2=parseInt(SCA)*1000;
				document.getElementById("costoS").value=mull2;
				}
				else if(tipo1=='IMG')
				{
				var mull2=parseInt(SCA)*500;
				document.getElementById("costoS").value=mull2;	
				}
				else if(tipo1==0)
				{
				document.getElementById("costoS").value="0";	
				}

				var S1=document.getElementById("costo").value
				var S2=document.getElementById("costoi").value
				var S3=document.getElementById("costoS").value
				var S4=document.getElementById("costoc").value
				var suma=parseInt(S1)+parseInt(S2)+parseInt(S3)+parseInt(S4);
				document.getElementById("total").value=suma;






				
			}


	</script>
</head>
<body>
<strong>
	<center><div style="font-family: arial; margin-top: 100px;">
	
	
	<form action="conexion4.php" method="get">
		<table width="80%">
		<THEAD>
			<TD><h1>Formulario para acreditar</h1></TD>
			<TD><a href="index.php" class="bu bu-green">REGRESAR</a></TD>
		</THEAD>
		<tr>
			<td>Nombre: <input type="text" name="nombre" required/ placeholder="Juan"></td>
			<td>Documento: <input type="text" name="documento" maxlength="10" placeholder="1118848594"></td>
		</tr>
		<tr>
			<td>Copias: <input type="text" name="copias" id="copias" placeholder="1" value="0"></td>
			<td>Impresiones: <input type="text" name="Impr" id="Impr" placeholder="1" value="0"></td>
			<td>Tipo: <select id="tipo" name="tipo">
			<option value="0">Escoja una opcion</option>
			<option value="B y N">Blanco y Negro</option>
			<option value="Color">Full color</option>
		</select></td>

		</tr>
		<tr>
			
			<td>Tiempo: <select id="tiempo" name="tiempo">
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
			



		</select></td>
		<td>Scanners: <input type="text" name="scanners" id="scanners" placeholder="1" value="0"></td> 	
		<TD>Tipo: <select id="tipo1" name="tipo1">
			<option value="0">Escoja una opcion</option>
			<option value="PDF">PDF</option>
			<option value="IMG">IMAGENES</option>
		</select></TD>
		</tr>
		<tr>
			<BR>
			<CENTER><td><input type="submit" onclick="llamar()" value="Aceptar"></td></CENTER>
			<td>Fecha: <input name="fecha" type="text" id="fecha" value="<?php echo date("d/m/Y"); ?>" size="10" /><br>
			</td>
		</tr>

</table>
<input type="hidden" name="costo" id="costo">
<input type="hidden" name="costoc" id="costoc">
<input type="hidden" name="costoi" id="costoi">
<input type="hidden" name="costoS" id="costoS">
<input type="hidden" name="total" id="total">
		
	
	</form></strong>

	</div></center>
	
</body>
</html>
