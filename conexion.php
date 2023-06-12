<?php
$servername = "localhost"; // Cambia esto si tu servidor MySQL no se encuentra en tu máquina local
$username = "root"; // Cambia esto al nombre de usuario correcto de tu servidor MySQL
$password = ""; // Cambia esto a la contraseña correcta de tu servidor MySQL
$dbname = "tarea_002"; // Cambia esto al nombre de la base de datos que creaste anteriormente

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
