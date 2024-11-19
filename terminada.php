<?php
require "includes/config.php";

// Verificar si se envió un ID de tarea
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Preparar la consulta para actualizar el estado de la tarea
    $query = $conn->prepare("UPDATE tareas SET terminada = 'culminado' WHERE id = ?");
    $query->bind_param("i", $id);

    // Ejecutar la consulta y verificar si tuvo éxito
    if ($query->execute()) {
        // Redirigir de vuelta a la página principal si la actualización fue exitosa
        header("Location: index.php");
        exit();
    } else {
        echo "Error al actualizar la tarea: " . $query->error;
    }
} else {
    echo "ID de tarea no especificado.";
}
?>


