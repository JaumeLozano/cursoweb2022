<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prueba_mysqli";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// sql to delete a record
$sql = "DELETE FROM ejerciciodelete WHERE id=2"; //Tendríamos que utilizar el OR para poder seleccionar diferentes registros que poder eliminar. 
// Si quisieramos eliminar toda la tabla utilizaríamos el comando DELETE TABLE. 
if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>