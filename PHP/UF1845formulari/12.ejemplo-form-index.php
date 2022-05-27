<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Ejemplo form index</title>
</head>
<body>
    <form action="recibe-get.php" method="get"> <!-- con action le decimos donde guarda los datos -->
@@ -22,8 +22,8 @@
            <option value="2002">2002</option>
        </select>
        <br>
        <label for="terminos">Aceptar Términos</label>
        <input type="checkbox" name="terminos" id="terminos" value="ok">
        <label for="terminos">Aceptar Términos</label>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>