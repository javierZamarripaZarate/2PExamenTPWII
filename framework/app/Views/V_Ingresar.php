<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro</title>
</head>
<body>
<div class="container">
	<center><h1>Ingreso de producto registrado</h1>
	<form method="POST" action="../Home/Ingresar_Form">	
	<label for="fecha">Fecha de compra</label>
  	<input type="text" name="fecha" placeholder="Ingresar fecha de compra"><br><br>
	<label for="descripcion">Descripcion del articulo</label>
  	<input type="text" name="descripcion" placeholder="Descripcion del articulo"><br><br>
  	<label for="cantidad">Cantidad de articulo</label>
  	<input type="text" name="cantidad" placeholder="Cantidad de articulo"><br><br>
  	<label for="precio">Precio Unitario del articulo</label>
  	<input type="text" name="precio" placeholder="Precio Unitario del articulo"><br><br>
  	<label for="subtotal">Subtotal por articulo</label>
  	<input type="text" name="subtotal" placeholder="Subtotal por articulo"><br><br>


  	<button type="submit">Ingresar</button><br><br>
    </form></center>
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