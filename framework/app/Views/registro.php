<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro</title>
</head>
<body>
<div class="container">
	<h1>Registro de nuevo Usuario</h1>
	<form method="POST" action="../Home/insertarForm">
	<label for = "email">Correo</label>
	<input type="text" name="email" placeholder="Ingresar Email"><br><br>
	<label for="password">Contraseña</label>
  	<input type="password" id="Password" name="password" placeholder="Ingresar password"><br><br>
  	<label for="nombre">Nombre</label>
  	<input type="text" name="nombre" placeholder="Ingresar tu nombre"><br><br>
  	<label for="apellido">Apellido</label>
  	<input type="text" name="apellido" placeholder="Ingresar tus apellidos"><br><br>


  	<button type="submit">Registrar</button><br><br>
    </form>
</div>
</body>
<footer>
	<div class="text-center text-dark p-3"
	style="background-color: rgba(0, 0, 0, 0.2);">
	<i class="bi bi-badge-cc"></i> 2022:
	<a class="text-dark" href="#">Javier</a>	
	</div>
</footer>
</html>