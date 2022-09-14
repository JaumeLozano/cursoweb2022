<?php

$conexion = new mysqli('localhost', 'pepito', 'menganito', 'prova_examen');

if ($conexion->connect_errno){
	die('No se ha podido conectar correctamente con el servidor');
} else {
	$sql = "INSERT INTO usuarios_examen(ID, nombre, edad) VALUES(null, 'Pau', 23)";
	$conexion->query($sql);
	if($conexion->affected_rows >= 1){
		echo 'Información registrada correctamente: ' . $conexion->affected_rows;
	}
}

?>

<?php

try {
	$conexion = new PDO('mysql:host=localhost;dbname=prova_examen', 'pepito', 'menganito');

	//Prepared Statements
	$statement = $conexion->prepare('INSERT INTO usuarios_examen VALUES (null, "Pau", 23)');
	$statement->execute();


}catch(PDOException $e){
	echo "Error: " . $e->getMessage();
}

?>