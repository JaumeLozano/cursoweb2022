<?php 
$errorsnom = '';
$errorscorreu = '';
$oknom = '';
$okcorreu = '';
if (isset($_POST['submit'])) {
    $nom=$_POST['nom'];
    $correu=$_POST['correu'];
    if (!empty($nom)) {
         $nom= trim($nom);
         $nom=htmlspecialchars($nom);
         $nom=stripslashes($nom);
        $oknom = 'El teu nom és ' . $nom . " i s'ha registrat correctament" .'<br>';
    } else {
        $errorsnom = 'Siusplau, escriu un nom vàlid <br>';
    }
    if (!empty($correu)) {
    $correu=filter_var($correu, FILTER_SANITIZE_EMAIL);
        if (!filter_var($correu, FILTER_VALIDATE_EMAIL)) {
            $errorscorreu = 'Siusplau escriu un correu vàlid <br>';
        } else {
            $okcorreu = 'El teu correu és ' . $correu . " i s'ha registrat correctament" . '<br>';
        }
    } else {
        $errorscorreu = 'Sisuplau escriu un correu vàlid <br>';
    }
}
require 'vista.php';
?>