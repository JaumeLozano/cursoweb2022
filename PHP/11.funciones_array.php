<?php 

// $amigo = array('telefono' => 6545647, 'altura'=>175, 'ciudad'=>'Castelldefels');

// extract($amigo); //extrae las claves de un array asociativo como si fueran variables
// echo $telefono;
$amigo = array('telefono' => 6545647, 'altura'=>175, 'ciudad'=>'Castelldefels');
//echo $amigo['telefono'];
extract($amigo); //extrae las claves de un array asociativo como si fueran variables
// echo $telefono; // Equivalente ahora a $amigo["telefono"];
// echo $altura;
// echo $ciudad;

@@ -12,20 +12,24 @@
 	'Jueves', 'Viernes', 'Sabado', 'Domingo'
);

// $ultimo_dia = array_pop($semana); //Extraer el último valor del array en $semana y guardandolo en la variable $ultimo_dia
//$ultimo_dia = array_pop($semana); //Extraer el último valor del array en $semana y guardandolo en la variable $ultimo_dia y se lo elimina a el array $semana
// foreach ($semana as $dia) {
// 	echo $dia . '<br />';
// }
// echo $ultimo_dia;
//echo $ultimo_dia;

// echo join('<br />', $semana); //Une los valores de array con un salto de linea
$frutasdelbosque = array("naranja", "plátano");
array_push($frutasdelbosque, "manzana", "arándano");
//print_r($frutasdelbosque);

// echo count($semana); //cuenta cuandos dias hay en el array $semana
//echo join('<br />', $semana); //Une los valores de array con un salto de linea, aunque podria ser cualquier string

// rsort($semana);
// echo join(', ', $semana);
//echo count($semana); //cuenta cuandos dias hay en el array $semana
//sort($semana); // Ordena A-Z alfabéticamente
//rsort($semana); // Orden "reverse" Z- A
//echo join(', ', $semana);

$semana_reverse = array_reverse($semana); //Orden inverso del array
echo join(', ', $semana_reverse);
//echo join(', ', $semana_reverse);

?> 