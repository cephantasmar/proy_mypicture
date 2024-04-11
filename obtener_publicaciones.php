<?php
$conexion = mysqli_connect('localhost', 'root', '', 'db_fotos');

$query = "SELECT * FROM publicaciones";
$resultado = mysqli_query($conexion, $query);

if(mysqli_num_rows($resultado) > 0) {
    while($fila = mysqli_fetch_assoc($resultado)) {
        echo "<div class='card mt-4'>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title'>{$fila['titulo']}</h5>";
        echo "<p class='card-text'>{$fila['descripcion']}</p>";
        echo "<img src='obtener_imagen.php?id={$fila['id']}' class='card-img-top' alt='Imagen'>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "No hay publicaciones";
}

mysqli_close($conexion);
?>
