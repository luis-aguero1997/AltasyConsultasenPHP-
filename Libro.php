<html>
	<head>
		<title>Libro de Visitas</title>
	</head>
	<body>
		<?php
			
			$nom = $_POST["nombre"];
			$sexo = $_POST["rbsexo"];
			$comentario = $_POST["txtcom"];

			$conexion = mysqli_connect("localhost","root","","visitas") or die (mysql_error());
			$consulta = mysqli_query($conexion,"insert into libro  (Nombre, Sexo, Comentario) values (\"$nom\",\"$sexo\",\"$comentario\");") or die (mysql_error());
			echo "Comentario guardado";
			
			//Hmbres
			$consulta2 = mysqli_query($conexion,"select * from libro;");
			if (mysqli_num_rows($consulta2) > 0) {	
				echo "<table border=1>";
				echo "<tr><th colspan=3 >LIBRO DE COMENTARIOS</th></tr>";
				echo "<tr><th>Nombre</th><th>Sexo</th><th>Comentario</th></tr>";
				while ($registro = mysqli_fetch_array($consulta2)){
					if ($registro["Sexo" ] == "M") {

						echo "<tr>";
					echo "<td style=background-color:salmon >".$registro["Nombre"]."</td>";
					echo "<td style=background-color:salmon >".$registro["Sexo"]."</td>";
					echo "<td style=background-color:salmon >".$registro["Comentario"]."</td>";
					}
					else{
						echo "<tr>";
					echo "<td style=background-color:blue>".$registro["Nombre"]."</td>";
					echo "<td style=background-color:blue>".$registro["Sexo"]."</td>";
					echo "<td style=background-color:blue>".$registro["Comentario"]."</td>";
					}
				}
			}
		?>
		<br><a href="Entrada.php">Regresar</a>	
	</body>
</html>