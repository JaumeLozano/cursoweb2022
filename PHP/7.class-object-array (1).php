<?php

    class Persona {
        //Atributos
        public $nombre = array();
        public $apellido = array();

        //Métodos
        public function guardar($nombre, $apellido){
            $this->nombre[] = $nombre;
            $this->apellido[] = $apellido;
        }
        public function mostrar(){
            for($i=0; $i<count($this->nombre); $i++){
                $this->formato($this->nombre[$i], $this->apellido[$i]);
            }
        //La primera vez marca que i=0, los valores del array es 0, ya no entro en la acción y me voy a la siguiente. 
        }
        public function formato($nombre, $apellido){
            echo 'Nombre: ' . $nombre . '| Apellido: ' . $apellido . '<br>';
        }
    }

    $persona = new Persona();
    $persona->guardar('Jose', 'Fernández');
    $persona->guardar('Arnau', 'Garcia');
    $persona->mostrar(); //vas al mostrar una vez, comprueba y luego lo imprime en la pantalla a través del echo. 

?>