<!DOCTYPE html>
<html>
	<?php 
	$filas=6;
	$columnas=4;
	?>
	<head>
		<title></title>
	</head>
	<body>
		<table border="5px"></table>
		
			<?php
				echo "<table border=5px>";
				for ($i=1; $i < $filas+1; $i++) { 
					echo "<tr>";
					for ($c=1; $c < $columnas+1; $c++) { 
						echo "<td>";
						echo "Fila número ".$i.", columna número ".$c;
						echo "</td>";
					}
					echo "</tr>";
				}
				echo "</table>";
			?>
		
	</body>
</html>
