<?php

  $host = "localhost"; // Máquina en donde esta corriendo el motor de base de datos
  $username = "lucas@localhost"; // Para XAMPP usuario 'root'
  $password = "passa"; // para XAMPP pass '<nada>'

  // Conexión al motor de base de datos en este caso MySql/MariaDB
  $enlace =  mysqli_connect($host, $username, $password);
  if (!$enlace) {
    die('No pudo conectarse: ' . mysqli_error());
  }
  echo 'Conectado satisfactoriamente';

  // Seleccionamos la base de datos
  if (!mysqli_select_db($enlace, 'practicauno')) {
      echo 'No pudo seleccionar la base de datos';
      exit;
  }

  // Hago la consulta SQL
  $sql = 'SELECT nombre FROM alumnos';

  // Ejecuto la consulta SQL
  $resultado = mysqli_query($enlace, $sql);

  // Valido el resultado
  if (!$resultado) {
      echo "Error de BD, no se pudo consultar la base de datos\n";
      echo "Error MySQL: ' . mysql_error()";
      exit;
  }

  // Muestro el resultado
  while ($fila = mysqli_fetch_assoc($resultado)) {
    echo $fila['nombre'];
    echo "<br>";
  }

  mysqli_free_result($resultado);

  // Cerramos la conexión a la base de datos
  mysqli_close($enlace);
?>
