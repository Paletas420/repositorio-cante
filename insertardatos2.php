<?php
include ("conexion2.php");
$conn=conectar();

$sql = "INSERT INTO contactanoss (correo,mensaje)
VALUES ('$_REQUEST[email]','$_REQUEST[message]')";

if ($conn->query($sql) === TRUE) {
  echo "Datos registrados";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

  header("Location: http://www.digitaldimention.com/pagina/contactanos1.html")
?>
