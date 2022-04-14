<?php

if (isset($_POST['enviar'])) {
  $nombre = $_POST['nombre'];
  $clave = $_POST['clave'];
  $conexion = mysqli_connect('localhost', 'root', '', 'sistema_prueba');
  $consulta = "INSERT INTO usuarios (nombre, clave) VALUES ('$nombre', '$clave')";
  echo $consulta;
  $resultado = mysqli_query($conexion, $consulta);
  if (!$resultado) {
    die('Consulta fallida' . mysqli_error());
  }
}

?>

<!DOCTYPE html
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="insertar_datos.php" method="POST">
    <input type="text" placeholder="Ingrese nombre de usuario" name="nombre">
    <input type="password" placeholder="Ingrese clave de usuario" name="clave">
    <input type="submit" value="Enviar Datos" name="enviar">
  </form>
</body>
</html>