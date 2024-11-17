<!-- view/viewRegistros.php -->
<?php
// Incluir la clase de conexión
include '../config/database.php';

try {
    // Obtener la conexión desde la clase Database
    $conn = Database::getInstance()->getConnection();

    // Consultar la vista `database_overview`
    $sql = "SELECT * FROM database_overview";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Tabla</th><th>Registros</th></tr>";

        // Mostrar los resultados en una tabla HTML
        while ($fila = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($fila['Tabla']) . "</td>";
            echo "<td>" . htmlspecialchars($fila['Registros']) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No se encontraron registros en la vista.";
    }

} catch (Exception $e) {
    echo "Error al consultar la vista: " . $e->getMessage();
}
?>