<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registros</title>
</head>
<body>
<div class="container">
<h1>Registros actuales</h1>
<table>
  <thead>
	<tr>
		<th>ID</th>
		<th>Usuario</th>
		<th>Password</th>
	</tr>
  </thead>	
  <tbody>
  	<tr>
  		<td><?php echo $id_usuario;?></td>
  		<td><?php echo $usuario;?></td>
  		<td><?php echo $password;?></td>
  	</tr>
  </tbody>
</table>
<form method="POST" action="<?php echo base_url();?>/VRegistrarGasto">
<input type="hidden" name="id_usuario" value="<? echo $id_usuario; ?>">
<button type="submit">Iniciar Sesion</button>	
</form>
</div>
</body>
</html>