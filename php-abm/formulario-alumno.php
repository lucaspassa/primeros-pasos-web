<!DOCTYPE html>
<?php
  // Existe la variable id por GET
  if (isset($_GET['id'])) {
    # Incluimos el código php para conectarse al motor de base de datos
    # y seleccionar la base de datos con la que vamos a trabajar
    require('include/conexion_base_de_datos.php');

    // Insertar el registro
    $sqlInsert = "INSERT INTO alumnos(nombre, email) VALUES ('".$_GET['nombre']."', '".$_GET['email']."')";
    echo $sqlInsert;
    $resultado = mysqli_query($enlace, $sqlInsert);

    // Valido el resultado
    if (!$resultado) {
        echo "No se pudo guardar el registro";
        exit;
    } else {
        echo "Se guardo correctamente el resultado";
    }

  }

?>
<html>
<head>
  <?php require('include/setHead.php'); ?>
</head>
<body>

<form action="" method="GET">
id: <input type="text" name="id" value="#" readonly/> <br>
Nombre: <input type="text" name="nombre"/> <br>
Email: <input type="email" name="email"/><br>
<input type="reset" value="Limpiar"/>
<input type="submit" value="Enviar"/>
</form>


</body>
</html>
