<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registrar Gastos</title>
</head>
<body>
<center><h1>Registrar Gastos</h1></center><br>
<center><form method="POST" action="../Home/InsertG">
<input type="text" name="cantidad" placeholder="Cantidad"><br><br>
<input type="date" name="fecha"><br><br>
<input type="text" name="descripcion" placeholder="descripcion"><br><br>
<input type="text" name="categoria" placeholder="categoria"><br><br>
<button type="submit">Registrar</button><br><br></center>
<center><a href="mostrarRegistros">Mostrar Registros</a><center></center>
<center><a href="VIngresarGasto">Buscar gastos</a><center></center>
</body>
</html>