<?php

session_start();

echo 'Bienvenido a la página de ejemplo #2<br />';

echo $_SESSION['color'] . '<br>';  // verde
echo $_SESSION['animal']. '<br>'; // gato
echo date('H:i:s d m Y', $_SESSION['instante']); //se le está dando la hora de inicio, cuando ha empezado esa complicación del código PHP. o por emplo cuando cadurá la sesión 

// Puede ser conveniente usar el SID aquí, como hicimos en pagina1.php
echo '<br /><a href="ejemplo1.php">Ejemplo 1</a>';
?> 