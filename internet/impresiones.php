<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Planilla Interconectados Chojuannet</title>
	<script type="text/javascript">
		
			function llamar()
			{
				var copias=document.getElementById("impr").value
				var tipo=document.getElementById("tipo").value
				if(tipo=='B y N'){
				var mull=parseInt(copias)*500;
				document.getElementById("costoc").value=mull;
				}
				else if(tipo=='Color')
				{
				var mull=parseInt(copias)*800;
				document.getElementById("costoc").value=mull;	
				}


				
			}


	</script>
</head>
<body>
	<center><div class="cuerpo">
	<a href="tiempo.php" class="bu bu-green">TIEMPO</a>
	<a href="copias.php" class="bu bu-green">COPIAS</a>
	<a href="impresiones.php" class="bu bu-green">IMPRESIONES</a>
	<a href="scanners.php" class="bu bu-green">SCANNERS</a>
	<a href="creditos.php" class="bu bu-green">CREDITOS</a>
	<a href="registros.php" class="bu bu-green">REGISTRO</a>

	</div></center>
	<br>
	<br>
	<CENTER><div style="margin-top: 20px;">
	<form action="conexion2.php" method="get">
		TIPO: <select id="tipo" name="tipo" required/>
			<option value="">Escoja una opcion</option>
			<option value="B y N">Blanco y Negro</option>
			<option value="Color">Full color</option>
		</select>
		<BR>
		IMPRESIONES: <input type="text" id="impr" name="copias" placeholder="Ej: 1" maxlength="4" size="3" required/ >
		<br>
		FECHA: <input name="fecha" type="text" id="fecha" value="<?php echo date("d/m/Y"); ?>" size="10" /><br>
		<input type="hidden" id="costoc" name="costoc">
		<input type="submit" value="Aceptar" onclick="llamar()">
	</form></div></CENTER>
</body>
</html>