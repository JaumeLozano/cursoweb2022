<!DOCTYPE html>
<html>
<body>
<?php
class Fruit { //creamos una clase con unos atributos y métodos
  public $name="pepito"; //esto es un atributo porque es una propiedad de la clase
  function set_name($name) {  //esto es un método, porque es una función dentro de una clase
    $this->name = $name; 
  }
}
echo 'Este es el Objeto $apple: ';
$apple = new Fruit(); //estamos convirtiendo una variable en objeto al definirla a través de una clase
echo $apple->name;//pepito // mostramos el nombre que se le ha añadido a través de la función de la clase, es pepito. 
$apple->set_name("Apple"); //aquí se le está aplicando una función al objeto por el que su nombre pasa a ser Apple. 
echo $apple->name;//Apple //aquí se vuelve a mostrar el nombre ya como Apple, cambiado en la declaración de antes. 
$apple->name="Orange"; // Aquí se le está cambiando directamente el nombre por Orange. Se le cambia el atributo directamente sin pasar por la función. 
echo $apple->name;//Orange // Aquí ya se va a mostrar directamente el nombre de Orange
echo '<br> Este es otro Objeto $orange: ';
$orange = new Fruit(); //Aquí estamos creando otro objeto con la misma clase. 
echo $orange->name;//pepito /Aquí estamos mostrando el nombre del objeto definido por el atributo de la class
$orange->set_name("Orange"); //aquí estamos configurando directamente el nombre a través de una función que es Orange. 
$orange->name="naranja"; // Aquí se le esta cambiando el nombre directamente por Naranja. Se le cambia el atributo directamente sin pasar por la función. 
echo "<br> Mi fruta preferida es la " . $orange->name; //Aquí se muestra el texto concatenado, con el nombre Naranja, cambiado en la línea anterior. Además se muestra con el echo inicial y el llamamiento al objeto y a su atributo. 
?>
</body>
</html>