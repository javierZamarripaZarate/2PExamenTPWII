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
		<th>ID Factura</th>
		<th>Fecha de compra</th>
		<th>Descripcion del articulo</th>
		<th>Cantidad de articulo</th>
		<th>precio_articulo</th>
		<th>subtotal_articulo</th>
		<th>Eliminar</th>
	</tr>
  </thead>	
  <tbody>
  	<?php foreach ($productos as $producto) { ?>
  	<tr>
  		<td><?php echo $producto['id_factura'];?></td>
  		<td><?php echo $producto['fecha_compra'];?></td>
  		<td><?php echo $producto['descripcion_articulo'];?></td>
  	  <td><?php echo $producto['cantidad_articulo'];?></td>
  	  <td><?php echo $producto['precio_articulo'];?></td>
  	  <td><?php echo $producto['subtotal_articulo'];?></td>
      <td><a type="button" href="<?php echo base_url(); ?>/Home/Eliminar_Registros/<?php echo $producto['id_factura']; ?>">Eliminar</a></td>
  	</tr>
     <?php } ?>
  </tbody>
</table>
</div>
</body>
</html>