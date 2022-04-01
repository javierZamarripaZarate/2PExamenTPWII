<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registros de Gastos de Javier</title>
</head>
<body>
<div class="container">
<h1>Registros actuales de Javier </h1>
<table>
  <thead>
	<tr>
		<th>ID gastos</th>
		<th>Cantidad</th>
		<th>Fecha de gasto</th>
		<th>descripcion</th>
		<th>Categoria</th>
		<th>Eliminar</th>
	</tr>
  </thead>	
  <tbody>
  	<?php foreach ($gastos as $gasto) { ?>
  	<tr>
  		<td><?php echo $gasto['id_gasto'];?></td>
  		<td><?php echo $gasto['cantidad'];?></td>
  		<td><?php echo $gasto['fecha'];?></td>
  	  <td><?php echo $gasto['descripcion'];?></td>
  	  <td><?php echo $gasto['categoria'];?></td>
      <td><a type="button" href="<?php echo base_url(); ?>/EliminarRegistros/<?php echo $gasto['id_gasto']; ?>">Eliminar</a></td>
  	</tr>
     <?php } ?>
  </tbody>
</table>
</div>
</body>
</html>