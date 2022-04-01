<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<div class="container">
	<h1>Registro encontrado</h1>
	<form method="POST" action="<?php echo base_url(); ?>/Home/actualizarRegistro">
	<input type="hidden" id="id_cliente" name="id_cliente" value="<?php echo $id_cliente; ?>">
	<label for="email">Email</label>
	<input type="email" name="email" value="<?php echo $usuario; ?>">
	<label for="password">Password</label>
	<input type="text" name="password" value="<?php echo $password; ?>">
	<label for="nombre">Nombre</label>
	<input type="text" name="nombre" value="<?php echo $nombre; ?>">
	<label for="apellido">Apellido</label>
	<input type="text" name="apellido" value="<?php echo $apellido; ?>">
	<label for="edad">Edad</label>
	<input type="text" name="edad" value="<?php echo $edad; ?>">
	<button type="submit">Actualizar</button>
	</form>
</div>
</body>
</html>