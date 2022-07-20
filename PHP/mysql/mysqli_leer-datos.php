<?php
// Realizamos una conexion a la base de datos.
$conexion = new mysqli('localhost', 'root', '', 'heidisql_curso');

// Nos retorna un codigo de error o si todo esta bien regresa 0.
// echo $conexion->connect_errno;

if ($conexion->connect_errno){
	die('Lo siento hubo un problema con el servidor'); //si la variable conexion --> connect_errno: 
} else {
	// $id = isset($_POST['id']) ? $_POST['id'] : 1;
	// $sql = "SELECT * FROM usuarios WHERE ID = $id";
	$sql = "SELECT * FROM usuarios";
	$resultado = $conexion->query($sql);
	
	if($resultado->num_rows){
		echo '<pre>';
		var_dump($resultado->fetch_assoc());
		echo $resultado->fetch_assoc()['nombre'];
		echo '</pre>';

		while($fila = $resultado->fetch_assoc()){
			echo $fila['ID'] . ' - ' . $fila['nombre'] . '<br />';
		//Si hay número de fila recorre toda la variable con el While
		}


	} else {
		echo 'No hay datos';
	}
}