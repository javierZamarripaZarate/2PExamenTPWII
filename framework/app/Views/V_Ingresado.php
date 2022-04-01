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
		<th>pPrecio Unitario del articulo</th>
		<th>Subtotal por articulo</th>
	</tr>
  </thead>	
  <tbody>
  	<tr>
  		<td><?php echo $id_factura;?></td>
  		<td><?php echo $fecha_compra;?></td>
  		<td><?php echo $descripcion_articulo;?></td>
  	  <td><?php echo $cantidad_articulo;?></td>
  	  <td><?php echo $precio_articulo;?></td>
  	  <td><?php echo $subtotal_articulo;?></td>

  	</tr>
  </tbody>
</table>
<form method="POST" action="<?php echo base_url();?>/Home/Buscar_Registro">
<input type="hidden" name="id_factura" value="<? echo $id_factura; ?>">
<button type="submit">Actualizar datos</button>	
</form>
</div>
</body>
</html>