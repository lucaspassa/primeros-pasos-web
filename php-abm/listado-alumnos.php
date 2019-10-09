<!DOCTYPE html>
<?php
  # Incluimos el código php para conectarse al motor de base de datos
  # y seleccionar la base de datos con la que vamos a trabajar
  require('conexion_base_de_datos.php');
?>
<html>
<head>
</head>
<body>
<?php
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
?>
</body>
</html>
