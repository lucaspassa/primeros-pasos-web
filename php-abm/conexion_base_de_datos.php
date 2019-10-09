<?php

// Conexión al motor de base de datos en este caso MySql/MariaDB
$enlace =  mysqli_connect('localhost', 'lucas@localhost', 'passa');
if (!$enlace) {
  die('No pudo conectarse: ' . mysqli_error());
}

// Seleccionamos la base de datos
if (!mysqli_select_db($enlace, 'practicauno')) {
    echo 'No pudo seleccionar la base de datos';
    exit;
}

?>
