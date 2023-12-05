<?php
include ("registros.php");
$conn=conectar();

$sql = "INSERT INTO registros (nombre,apellido,correo,contrasena)
VALUES ('$_REQUEST[txtnombre]', '$_REQUEST[txtap]','$_REQUEST[email]','$_REQUEST[pswd]')";

if ($conn->query($sql) === TRUE) {
  echo "Datos registrados";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

  header("Location: http://www.digitaldimention.com/pagina/sesion.html")
?>
