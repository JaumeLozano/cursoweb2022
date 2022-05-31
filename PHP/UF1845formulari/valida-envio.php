<?php
if(!$_GET && !$_POST){ //Podríamos poner también &&(!POST)) para evitar que no se redireccione en caso que sea  otra metodología. En las wbs se utilizará un único documento en toda la web 
 header('Location: http://localhost/cursoweb2022/PHP/UF1845formulari/formulario.php'); //Carpeta y archivo para rellenar el form correcto
}
// print_r($_SERVER);
#1. REVISAR DE QUE FORMA SE ENVIAN LOS DATOS
// if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//     echo 'Se ha enviado por GET';
// } else {
//     echo 'Se ha enviado por POST';
// }

// #2. REVISAR SI SE HA ENVIADO EL FORMULARIO COMPROBANDO SUBMIT
// if (isset($_GET['submit'])) {
//     echo 'Se han enviado los datos correctamente por el método GET <br>';
//     print_r($_GET['submit']);
//     echo '<br>';
//     print_r($_GET);
// }
// if (isset($_GET['submit2'])) {
//     echo 'Se han enviado los datos correctamente del segundo formulario por el método GET. ';
//     print_r($_GET['submit2']);
// }

#3. EJERCICIO REVISAR SI SE HA ENVIADO POR POST O GET Y ADEMÁS EN EL FORMULARIO COMPROBAMOS QUE SUBMIT
$metodo= $_SERVER['REQUEST_METHOD']; //antes de nada ya pregunta el tipo que es. Te solicita el methodo. 
if ($metodo == 'GET') {//Enviado mediante GET
    if (isset($_GET['submit'])) {
        echo 'Se han enviado los datos correctamente en el formulario 1, mediante GET <br>';
    }
    if (isset($_GET['submit2'])) {
        echo 'Se han enviado los datos correctamente del segundo formulario, mediante GET ';
    }
    // echo print_r($_GET);
    // echo print_r($_POST); //VACIO
} else { //Enviado mediante POST
    if (isset($_POST['submit'])) {
        echo 'Se han enviado los datos correctamente, mediante POST <br>';
        print_r($_POST['submit']);
        echo '<br>';
        print_r($_POST);
    }
    if (isset($_POST['submit2'])) {
        echo 'Se han enviado los datos correctamente del segundo formulario, mediante POST ';
        print_r($_POST['submit2']);
    }
    echo print_r($_GET); //VACIO
    echo print_r($_POST); //es el que devuelve el valor de 1. 
}

?>