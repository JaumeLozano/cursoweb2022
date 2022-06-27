<!DOCTYPEhtml>
<html lang="ca">
    <head>
        <title>Formularide Contacte</title>
        <link rel="stylesheet" type="text/css" href="estilformulari.css" />
    <head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post"> 
            <input type="text" name="nom" placeholder="Nom">
            <div class="possibleserrors"><?php echo $oknom; ?></div> 
            <div class="possibleserrors"><?php echo $errorsnom; ?></div>
            <br>
            <input type="mail" name="correu" placeholder="Correu">
            <div class="possibleserrors"><?php echo $okcorreu; ?></div> 
            <div class="error"><?php echo $errorscorreu; ?></div>
            <br>
            <input type="submit" name="submit" value="Enviar Correu">
        </form>
    </body>
</html> 
