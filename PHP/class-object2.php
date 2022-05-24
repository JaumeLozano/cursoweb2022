<?php
class Fruit {
  public $name;
  function set_name($name) {
    $this->name = $name;
  }
}
$apple = new Fruit();
echo $apple->name ;//Undefined
$apple->set_name("Apple");
echo $apple-> name; //Aquí si que aparecerá Apple 
$apple->name="Orange"
echo $apple->name; //Orange

$orange = new Fruit();
$orange-> set_name("Orange.")

?>