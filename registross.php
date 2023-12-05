<?php
  function conectar() //Funcion conectar
  {
    $servername = "localhost"; //nombre del servidor
    $username = "root";
    $password = "holaquehace";
    $db="BDRegistro";


    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($conn->connect_error) {
      die("La conexión falló: " . $conn->connect_error);
    }

    echo "Conexión exitosa";
    return $conn;
    $conn->close();
  }
?> 
