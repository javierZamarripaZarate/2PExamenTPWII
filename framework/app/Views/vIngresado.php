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
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Edad</th>
	</tr>
  </thead>	
  <tbody>
  	<tr>
  		<td><?php echo $id_cliente;?></td>
  		<td><?php echo $usuario;?></td>
  		<td><?php echo $password;?></td>
  	  <td><?php echo $nombre;?></td>
  	  <td><?php echo $apellido;?></td>
  	  <td><?php echo $edad;?></td>

  	</tr>
  </tbody>
</table>
<form method="POST" action="<?php echo base_url();?>/Home/buscarRegistro">
<input type="hidden" name="id_cliente" value="<? echo $id_cliente; ?>">
<button type="submit">Actualizar datos</button>	
</form>
</div>
</body>
</html>