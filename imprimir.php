<?php
    //Codi PHP
    //Resposta Apartat 5, Pràctica 1
    //Primera part de l'apartat 5: La classe PHP com a tal no mostra d'entrada cap codi malgrat que si incorpora un seguit d'atributs i un seguit de mètodes. En concret, si ens referim als atributs, a través de les 4 propietats, cadascuna ens diu un valor, entre ells, que si que hi ha tinta (boolean), que si que hi ha paper (boolean), ens diu que el tamany ha de ser de DINA4 (string) i que el color de impressió ha de ser negre (string). Per altra banda també incorpora una funció que a través de les altres tres variables, incorporades com arguments, les introdueix a la funció condicional. Si tant l'atribut $tinta com $paper son true, vol dir que es mostrar 'Es pot imprimir en ' concatenat de l'atribut que ens indica la mida del paper. En canvi, si un dels dos atributs no és true, el missatge que se'ns mostrarà serà 'Falta tinta o paper'. És important recordar que ara mateix la funció no mostra res perquè no hi ha una crida disponible a aquesta funció. Fins que no s'incorpori, no s'executarà.
    //Segona part de l'apartat 5: 
    class Impressora {
        //Atributs
        public $tinta = true;
        public $paper = true;
        public $tamany = 'DINA4';
        public $color = 'negre';
        //Metodes
        public function imprimeix($tinta,$paper,$tamany,$color){ //Hem incorporat a la funció els this que defineixen i fan referencia a les propietats. En aquest sentit hem afegir una concatenació amb l'atribut color per tal que quan fem la crida a la funció ens mostra la part de l'expressió que queda, tal i com es demana a l'exercici. 
            if ($tinta && $paper){
                $this->tamany = $tamany;
                $this->color = $color;
                echo 'Es pot imprimir en ' . $tamany . ' en color ' . $color;
            }
            else{
                echo 'Falta tinta o paper';
            }
        }
    }
    $dispositiudimpressio = new Impressora(); //aquí fem la creació de l'objecte a partir de la seva definició des d'una classe.  
    $dispositiudimpressio->imprimeix(true,true,"DINA4","negre"); //A través de l'objecte fem una crida a la funció imprimeix. 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Impressió del document</title>
</head>
<body>
    <h1>Titular del document</h1>
    <?php 
	    $everyday = array(
            'Dilluns', 'Dimarts', 'Dimecres', 'Dijous', 
            'Divendres', 'Dissabte', 'Diumenge'
            );
      foreach($everyday as $day){
            sort($everyday);
            echo '<li>' . $day . '</li>';
            }
?>
</body>
</html>