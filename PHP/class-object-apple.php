<?php
class Fruit {
  public $name; //solo tiene esta propiedad/atributo
}
//la clase es una plantilla para crear objetos
//una función dentro de una clase es un método.
$apple = new Fruit(); // es una variable de tipo objeto, defines su estructura a través de una clase. 
$apple->name = "Apple";

echo $apple->name;
?>