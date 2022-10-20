<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/semana1.css">
	<title>Formulario</title>
</head>
<body>
	<center>
		<form method="post" action="index.php">
			<h4 for="Nombre">Nombre</h4>
			<input id="name" name="name" class="formulario" type="text" placeholder="Ingrese Nombre" required>

			<h4 for="Correo">Email</h4>
			<input id="Correo" name="correo" class="formulario" type="email" placeholder="Ingrese Email" required>

			<h4>Número aleatorio</h4>
			<input style="background: #fff;width: 66px;text-align: center;" class="formulario" type="text" value="<?php echo rand(000001,999999)?>" disabled>

			<?php 
				if(isset($_POST['name']) && isset($_POST['correo'])){

				}

			?>

			<button class="bottom" id="btn" type="submit">ENVIAR DATOS</button>
		</form>

		
	</center>
</body>
</html>