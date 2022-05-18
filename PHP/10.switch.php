<?php 

# Sintax del Switch
// switch (variable) {
// 	case 'value':
// 		# code...
// 		break;
	
// 	default:
// 		# code...
// 		break;
// }

$mes = 'Marzo';

switch($mes){
	case 'Diciembre':
		echo "Feliz Navidad!";
	break;

	case 'Enero':
		echo "Feliz Año Nuevo";
	break;

	case 'Junio':
		echo "Bona revetlla";
	break;

	default:
		echo "En este mes no se celebra nada";
	break;

}

$horas = 17;

if (($horas >= 15) && ($horas <= 20)) {
	$saludo = "Estamos en clase de ETIF";
}
	else{
	$saludo = "No estamos en clase de ETIF";
}
echo "<br>" . $saludo;

# Alternativa a Switch

// if ($mes == 'Diciembre') {
// 	echo "Feliz Navidad";
// } elseif ($mes == 'Enero') {
// 	echo "Feliz Año Nuevo";
// } else {
// 	echo "En este mes no se celebra nada";
// }

?>