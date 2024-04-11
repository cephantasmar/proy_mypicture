<?php
$conexion = mysqli_connect('localhost', 'root', '', 'db_fotos');

$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

$query = "INSERT INTO publicaciones (titulo, descripcion, imagen) VALUES ('$titulo', '$descripcion', '$imagen')";
$resultado = mysqli_query($conexion, $query);

if($resultado) {
    echo "Publicación agregada correctamente";
} else {
    echo "Error al agregar publicación";
}

mysqli_close($conexion);
?>
