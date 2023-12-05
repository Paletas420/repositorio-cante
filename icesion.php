<?php
include ("registross.php");
$conn=conectar();

$sql = "INSERT INTO registross (correo,contrasena)
VALUES ('$_REQUEST[email]','$_REQUEST[pswd]')";

if ($conn->query($sql) === TRUE) {
  echo "Datos registrados";
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

  header("Location: http://www.digitaldimention.com/pagina/index1.html")
?>
