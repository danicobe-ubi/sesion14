<?php
$conexion = mysqli_connect('localhost', 'root', '', 'sistema_prueba');
$consulta = 'SELECT * FROM usuarios';
$resultado = mysqli_query($conexion, $consulta);

if (!$resultado) {
  die('Consulta fallida' . mysqli_error());
}

// if ($conexion) {
//   echo 'conexion establecida';
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Hola mundo</h1>
  <?php
while ($fila = mysqli_fetch_assoc($resultado)) {
  ?>
  <pre>
    <?php
print_r($fila);
  ?>
  </pre>
  <?php
}
?>
</body>
</html>