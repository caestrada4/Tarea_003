<?php
include 'conexion.php';

$contacto_id = $_GET['id'];

// Obtén los datos del contacto a editar
$sql = "SELECT * FROM contactos WHERE id = $contacto_id";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $nombre = $row['nombre'];
    $apellido = $row['apellido'];
    $direccion = $row['direccion'];
    $correo_electronico = $row['correo_electronico'];
    $numero_telefono = $row['numero_telefono'];

    // Mostrar el formulario de actualización
    echo '<form action="actualizar.php" method="POST">
            <input type="hidden" name="contacto_id" value="' . $contacto_id . '">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="' . $nombre . '" required>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" value="' . $apellido . '" required>
            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" value="' . $direccion . '">
            <label for="correo_electronico">Correo Electrónico:</label>
            <input type="email" id="correo_electronico" name="correo_electronico" value="' . $correo_electronico . '">
            <label for="numero_telefono">Número de Teléfono:</label>
            <input type="text" id="numero_telefono" name="numero_telefono" value="' . $numero_telefono . '">
            <button type="submit">Actualizar</button>
        </form>';

    $conn->close();
} else {
    echo "No se encontró el contacto a editar.";
}

// Si el contacto se actualizó correctamente, muestra el mensaje y el enlace para regresar a index.php
if (isset($_GET['actualizado']) && $_GET['actualizado'] == 'si') {
    echo "Contacto actualizado correctamente. <a href='index.php'>Regresar a la lista de contactos</a>";
}
?>
