<?php

$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril', 
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

$numeros = array(1, 22, 23, 10, 9, 5, 70, 100, 20);

rsort($numeros);
sort($meses); //Función del array que queremos ordenar
// rsort($meses); Inverso del array
// rsort($numeros);

//ejercicio
$díasdelasemana = array ('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo');
echo implode("<br>",$díasdelasemana);
sort($díasdelasemana);
echo implode("<br>",$díasdelasemana);
rsort($díasdelasemana);
echo implode("<br>",$díasdelasemana);



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Meses del Año</title>
</head>
<body>
	<h1>Meses del Año</h1>
	<ul>
		<!-- COMENTADOS -->
		<!-- <?php
			foreach($numeros as $numero){
				echo '<li>' . $numero . '</li>';
			}
		?>
		<?php
			foreach($meses as $mes){
				echo '<li>' . $mes . '</li>';
			}
		?> -->
		<!-- ACTIVOS DEL EJERCICIO $DIAS -->
		<?php
			echo "ORDEN POR DIAS NORMAL<br>";
			foreach($dias as $dia){
				echo '<li>' . $dia . '</li>';
			}
			sort($dias);
			echo "ORDEN ALFABÉTICO<br>";
			foreach($dias as $dia){
				echo '<li>' . $dia . '</li>';
			}
			rsort($dias);
			echo "ORDEN INVERSO<br>";
			foreach($dias as $dia){
				echo '<li>' . $dia . '</li>';
			}
		?>
	</ul>
</body>
</html>

