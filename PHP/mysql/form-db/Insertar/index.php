<?php 

	$errores = '';
	$enviado = '';

	if (isset($_POST['submit'])) {
		$nombre = $_POST['nombre'];
		$correo = $_POST['correo'];
		$mensaje = $_POST['mensaje'];
			//sanear (recibir textos y no nada más)
		if (!empty($nombre)) {
			$nombre = trim($nombre);
		} else {
			$errores .= 'Por favor escribe un nombre <br />'; // el .= representa la concatenación
		}

		if (!empty($correo)) {
			$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);

			if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
				$errores .= 'Por favor escribe un correo valido <br />';
			}
		} else {
			$errores .= 'Por favor escribe un correo <br />';
		}

		if(!empty($mensaje)){
			$mensaje = htmlspecialchars($mensaje);
			$mensaje = trim($mensaje);
			$mensaje = stripslashes($mensaje);
		} else {
			$errores .= 'Por favor escribe el mensaje <br />';
		}

		if(!$errores){
			$enviar_a = 'jaume.lozano@etif.es';
			$asunto = 'Correo enviado desde el formulario PHP';
			$mensaje_preparado = "De: $nombre \n";
			$mensaje_preparado .= "Correo: $correo \n";
			$mensaje_preparado .= "Mensaje: " . $mensaje;

			//mail($enviar_a, $asunto, $mensaje_preparado);
			$enviado = 'true'; //esta función es interesante porque le puedes decir a quien se lo envías. $enviar_a es a quien se lo envías, $asunto, es lo que le aparece. 
		}

	}

	require 'index.view.php';

	if ($enviado == 'true'){
		try {
			$conexion = new PDO('mysql:host=localhost;dbname=form_db', 'root', '');
			echo "Todo OK conectado";
			//Establecer correctamente la conexión 
			$statement = $conexion->prepare('INSERT INTO usuarios_form VALUES (null, :nombre, :correo, :mensaje)');
			//Aquí hay que revisar que la sentecia SQL es correcta. Si la sentencia e scorrecta lo ppondremos. 
			echo "OK, sentencia correcta"
			$statement->execute(
				array(':nombre'=> $nombre, 'jaume.lozano@etif.es'=> $correo, ':mensaje'=> $mensaje)
			);

		} catch(PDOException $e){
			echo "Error: " . $e->getMessage();
		}
	}
?>