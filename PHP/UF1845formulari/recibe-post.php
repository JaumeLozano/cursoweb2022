<?php

// print_r($_POST);
// $nombre = $_POST['nombre'];
// $sexo = $_POST['sexo'];
// $fecha = $_POST['fecha'];
// $terminos = $_POST['terminos'];

// echo 'Hola ' . $nombre . ' eres ' . $sexo . ' y has escogido la fecha: '. $fecha ;

if(!$_POST) { //Si no hay datos daria error
    header('Location:http://localhost/cursoweb2022/PHP/UF1845formulari/12.ejemplo-form-index2.php'); //Carpeta y archivo para rellenar el form correcto
}

$nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];
$fecha = $_POST['fecha'];
$terminos = $_POST['terminos'];

echo 'Hola ' . $nombre . ' eres ' . $sexo . ' y has escogido la fecha: '. $fecha ;
echo 'Hola ' . $nombre . ' eres ' . $_POST['sexo'] . ' y has escogido la fecha: '. $fecha ;

?> s

?> 