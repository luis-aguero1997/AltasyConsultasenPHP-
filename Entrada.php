<html>
<head>
	<title>Dia de a Mujer</title>
</head>
<body>
	<h1>Libro de Visitas</h1>

	<h2>Escribe los datos que se te piden </h2>
	<form name = "FrmDatos" action="Libro.php" method="post">

	<table>
		<tr>
		Introduce tu nombre:
		<input type="text" name="nombre" required="required"><br>
		</tr>
		<tr>
		Elije tu sexo:
		<input type="radio" name="rbsexo" value="H" required="required">Masculino <input type="radio" name="rbsexo" value="M" required="required">Femenino  <br><br>
		</tr>
		<tr>
		Comentario:
		<input type="text" name="txtcom" style="width:200px;height:500px" required="required"><br>
		</tr>
	</table>
	<input type="submit" value="Agregar Comentario">
	</form>
	
</body>
</html>
