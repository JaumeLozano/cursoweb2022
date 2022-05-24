<?php 

$edad = 18;

$edad = (isset($edad)) ? $edad : 'El usuario no establecio su edad';

if (isset($edad)) { //si se encuentra la variable pues se habrá establecido una y si no aparece el string. 
$edad = $edad;
} else {
$edad = 'El usuario no establecio su edad';
}
echo 'Edad: ' . $edad;

//añadir la opción en la que por cada else podemos poner un echo 


?>