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
			<th>ID gastos</th>
		<th>Cantidad</th>
		<th>Fecha de gasto</th>
		<th>descripcion</th>
		<th>Categoria</th>
	</tr>
  </thead>	
  <tbody>
  	<tr>
  		<td><?php echo $id_gasto;?></td>
  		<td><?php echo $cantidad;?></td>
  		<td><?php echo $fecha;?></td>
  	  <td><?php echo $descripcion;?></td>
  	  <td><?php echo $categoria;?></td>

  	</tr>
  </tbody>
</table>
<form method="POST" action="<?php echo base_url();?>/BuscarRegistro">
<input type="hidden" name="id_gasto" value="<? echo $id_gasto; ?>">
<button type="submit">Actualizar datos</button>	
</form>
</div>
</body>
</html>