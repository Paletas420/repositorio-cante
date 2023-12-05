<?php
include ("conexion1.php");
$conn=conectar();

$sql = "INSERT INTO contactanos (nombre,apellido,correo,mensaje)
VALUES ('$_REQUEST[txtnombre]', '$_REQUEST[txtap]','$_REQUEST[email]','$_REQUEST[message]')";

if ($conn->query($sql) === TRUE) {
  echo "Datos registrados";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

  header("Location: http://www.digitaldimention.com/pagina/contactanos.html")
?>

