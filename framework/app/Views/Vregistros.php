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
		<th>Eliminar</th>
	</tr>
  </thead>	
  <tbody>
  	<?php foreach ($usuarios as $usuario) { ?>
  	<tr>
  		<td><?php echo $usuario['id_cliente'];?></td>
  		<td><?php echo $usuario['usuario'];?></td>
  		<td><?php echo $usuario['password'];?></td>
  	  <td><?php echo $usuario['nombre'];?></td>
  	  <td><?php echo $usuario['apellido'];?></td>
  	  <td><?php echo $usuario['edad'];?></td>
      <td><a type="button" href="<?php echo base_url(); ?>/Home/eliminarRegistros/<?php echo $usuario['id_cliente']; ?>">Eliminar</a></td>
  	</tr>
     <?php } ?>
  </tbody>
</table>
</div>
</body>
</html>