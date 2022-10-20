<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/semana2.css">
	<title>Semana2</title>
</head>
<body>
	<?php
	include("php/correo.php")
	?>
	<form method="post" action="index.php">
	<input type="text" placeholder="nombre" name="name" required>
	<input type="email" placeholder="email" name="email" required>
	<input type="text" placeholder="asunto" name="asunto" required>
	<textarea placeholder="mensaje" maxlength="450" name="msg"></textarea>
	<input style="background-image:linear-gradient(0deg, #9d00ff59, #2c9ee173);
    box-shadow: 5px 5px 20px 5px #0000004a;" type="submit" name="enviar">
	</form>
</body>
</html>