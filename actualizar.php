<?php
include 'conexion.php';

$contacto_id = $_POST['contacto_id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$correo_electronico = $_POST['correo_electronico'];
$numero_telefono = $_POST['numero_telefono'];

// Actualiza el contacto en la base de datos
$sql = "UPDATE contactos SET
            nombre = '$nombre',
            apellido = '$apellido',
            direccion = '$direccion',
            correo_electronico = '$correo_electronico',
            numero_telefono = '$numero_telefono'
        WHERE id = $contacto_id";

if ($conn->query($sql) === TRUE) {
    header("Location: editar.php?id=$contacto_id&actualizado=si");
    exit();
} else {
    echo "Error al actualizar el contacto: " . $conn->error;
}

$conn->close();
?>
