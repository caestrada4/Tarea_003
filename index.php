<?php
include 'conexion.php';

// Obtén todos los contactos de la base de datos
$sql = "SELECT * FROM contactos";
$result = $conn->query($sql);

echo "<table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Dirección</th>
            <th>Correo Electrónico</th>
            <th>Número de Teléfono</th>
            <th>Acciones</th>
        </tr>";

// Imprime los datos de cada contacto
while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>" . $row["id"] . "</td>
            <td>" . $row["nombre"] . "</td>
            <td>" . $row["apellido"] . "</td>
            <td>" . $row["direccion"] . "</td>
            <td>" . $row["correo_electronico"] . "</td>
            <td>" . $row["numero_telefono"] . "</td>
            <td>
                <form action='editar.php?id=" . $row["id"] . "' method='POST'>
                    <button type='submit'>Actualizar</button>
                </form>
                <form action='eliminar.php' method='POST'>
                    <input type='hidden' name='contacto_id' value='" . $row["id"] . "'>
                    <button type='submit'>Eliminar</button>
                </form>
            </td>
        </tr>";
}

echo "</table>";

// Agregar formulario para crear nuevos contactos
echo '<form action="crear.php" method="POST">
        <h2>Agregar Nuevo Contacto</h2>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>
        <label for="direccion">Dirección:</label>
        <input type="text" id="direccion" name="direccion">
        <label for="correo_electronico">Correo Electrónico:</label>
        <input type="email" id="correo_electronico" name="correo_electronico">
        <label for="numero_telefono">Número de Teléfono:</label>
        <input type="text" id="numero_telefono" name="numero_telefono">
        <button type="submit">Agregar</button>
    </form>';

if ($result->num_rows == 0) {
    echo "No se encontraron contactos.";
}

$conn->close();
?>
