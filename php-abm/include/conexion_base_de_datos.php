<?php

  $host = "localhost"; // Máquina en donde esta corriendo el motor de base de datos
  $username = "lucas@localhost"; // Para XAMPP usuario 'root'
  $password = "passa"; // para XAMPP pass '<nada>'

  // Conexión al motor de base de datos en este caso MySql/MariaDB
  $enlace =  mysqli_connect($host, $username, $password);
if (!$enlace) {
  die('No pudo conectarse: ' . mysqli_error());
}

// Seleccionamos la base de datos
if (!mysqli_select_db($enlace, 'practicauno')) {
    echo 'No pudo seleccionar la base de datos';
    exit;
}

mysqli_query($enlace,'SET NAMES utf8');

?>
