<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<div class="container">
	<h1>Gasto encontrado</h1>
	<form method="POST" action="<?php echo base_url(); ?>../Home/ActualizarG">
	<input type="hidden" id="id_gasto" name="id_gasto" value="<?php echo $id_gasto; ?>">
	<label for="cantidad">Cantidad</label>
	<input type="text" name="cantidad" value="<?php echo $cantidad; ?>">
	<label for="fecha">Fecha de compra</label>
	<input type="date" name="fecha" value="<?php echo $fecha; ?>">
	<label for="descripcion">Descripcion</label>
	<input type="text" name="descripcion" value="<?php echo $descripcion; ?>">
	<label for="categoria">Categoria</label>
	<input type="text" name="categoria" value="<?php echo $categoria; ?>">
	<label for="subtotal">Subtotal por articulo</label>
	<button type="submit">Actualizar</button>
	</form>
</div>
</body>
</html>