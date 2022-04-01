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
	<form method="POST" action="<?php echo base_url(); ?>../Home/Actualizar_Registro">
	<input type="hidden" id="id_factura" name="id_factura" value="<?php echo $id_factura; ?>">
	<label for="fecha">Fecha de compra</label>
	<input type="text" name="fecha" value="<?php echo $fecha_compra; ?>">
	<label for="descripcion">Descripcion del articulo</label>
	<input type="text" name="descripcion" value="<?php echo $descripcion_articulo; ?>">
	<label for="cantidad">Cantidad del articulo</label>
	<input type="text" name="cantidad" value="<?php echo $cantidad_articulo; ?>">
	<label for="precio">Precio Unitario del articulo</label>
	<input type="text" name="precio" value="<?php echo $precio_articulo; ?>">
	<label for="subtotal">Subtotal por articulo</label>
	<input type="text" name="subtotal" value="<?php echo $subtotal_articulo; ?>">
	<button type="submit">Actualizar</button>
	</form>
</div>
</body>
</html>