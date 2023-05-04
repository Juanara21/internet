<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Planilla Interconectados Chojuannet</title>
	<script type="text/javascript">
		
			function llamar()
			{
				var copias=document.getElementById("copias").value
				var mull=parseInt(copias)*200;
					


				document.getElementById("costoc").value=mull;


				
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
	<form action="conexion1.php" method="get">
		COPIAS: <input type="text" id="copias" name="copias" placeholder="Ej: 1" maxlength="4" size="3" required/ >
		<br>
		FECHA: <input name="fecha" type="text" id="fecha" value="<?php echo date("d/m/Y"); ?>" size="10" /><br>
		<input type="hidden" id="costoc" name="costoc">
		<input type="submit" value="Aceptar" onclick="llamar()">
	</form></div></CENTER>
</body>
</html>