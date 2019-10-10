<!DOCTYPE html>
<?php
  # Incluimos el código php para conectarse al motor de base de datos
  # y seleccionar la base de datos con la que vamos a trabajar
  require('include/conexion_base_de_datos.php');
?>
<html>
<head>
  <?php require('include/setHead.php'); ?>
</head>
<body>
<?php
// Hago la consulta SQL
$sql = 'SELECT id, nombre, email FROM alumnos';

// Ejecuto la consulta SQL
$resultado = mysqli_query($enlace, $sql);

// Valido el resultado
if (!$resultado) {
    echo "Error de BD, no se pudo consultar la base de datos\n";
    echo "Error MySQL: ' . mysql_error()";
    exit;
}

?>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
<?php
// Muestro el resultado
while ($fila = mysqli_fetch_assoc($resultado)) {
  echo "<tr>";
  echo " <th scope='row'>".$fila['id']."</th>";
  echo " <td> ".$fila['nombre']."</td>";
  echo "<td>".$fila['email']."</td> ";
  echo "</tr>";
}
?>
  </tbody>
</table>


</body>
</html>
