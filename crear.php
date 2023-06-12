<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$correo_electronico = $_POST['correo_electronico'];
$numero_telefono = $_POST['numero_telefono'];

// Inserta el nuevo contacto en la base de datos
$sql = "INSERT INTO contactos (nombre, apellido, direccion, correo_electronico, numero_telefono)
        VALUES ('$nombre', '$apellido', '$direccion', '$correo_electronico', '$numero_telefono')";

if ($conn->query($sql) === TRUE) {
    echo "Contacto agregado correctamente.";
} else {
    echo "Error al agregar el contacto: " . $conn->error;
}

$conn->close();
header("Location: index.php");
exit();
?>
