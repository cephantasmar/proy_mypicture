<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_fotos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$fecha = $_POST['fecha'];
$tipo_evento = $_POST['tipo_evento'];

$sql = "INSERT INTO reservas_fotografo (nombre, email, telefono, fecha, tipo_evento) VALUES ('$nombre', '$email', '$telefono', '$fecha', '$tipo_evento')";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo "Reserva realizada con éxito<br>";
    echo "<a href='index.html'>Volver al formulario</a>"; // Enlace para volver al formulario
} else {
    echo "Error al realizar la reserva: " . $conn->error;
}

$conn->close();
?>