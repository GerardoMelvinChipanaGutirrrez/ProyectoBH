<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="semana4.css">
	<title></title>
</head>
<body>
	<?php
	include("php/correo.php")
	?>
	<center>
		<form method="post" action="index.php">
			<img src="#">
			<select class="seleccion" name="staff" required>
				<option>ALBERT SMITH</option>
				<option>LUCY WILKEN</option>
				<option>JAMES BARTON</option>
				<option>SELENA GOMEZ</option>
				<option>SARAH ANAHA</option>
			</select>
			<input class="fecha" type="date" max="" name="day" required>
			<select class="turno" name="turno" required>
				<option>9 a.m.</option>
				<option>10 a.m.</option>
				<option>11 a.m.</option>
				<option>1 p.m.</option>
				<option>2 p.m.</option>
				<option>3 p.m.</option>
				<option>4 p.m.</option>
				<option>5 p.m.</option>
				<option>6 p.m.</option>
			</select>
			<input type="text" placeholder="nombre" name="name" required>
			<input type="tel" placeholder="telefono" name="telefono" required>
			<input type="email" placeholder="email '@' " name="email" required>
			<input type="submit" placeholder="confirmar" name="enviar">
		</form>
	</center>
</body>
</html>