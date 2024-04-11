<?php
$conexion = mysqli_connect('localhost', 'root', '', 'db_fotos');

$id = $_GET['id'];

$query = "SELECT imagen FROM publicaciones WHERE id = $id";
$resultado = mysqli_query($conexion, $query);

header("Content-type: image/jpeg"); // Ajusta el tipo de contenido según el tipo de imagen que almacenas
echo mysqli_fetch_assoc($resultado)['imagen'];

mysqli_close($conexion);
?>
