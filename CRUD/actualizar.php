<?php
include 'conectar.php';

try {
    // Valores que se actualizarán
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];

    // Consulta SQL para actualizar el registro
    $sql = "UPDATE usuarios SET nombre=?, apellido=?, email=? WHERE id=?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $nombre, $apellido, $email, $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Registro actualizado exitosamente";
    } else {
        echo "No se realizaron cambios. Los valores pueden ser los mismos.";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
} finally {
    // Cerrar la conexión
    $conn->close();
}
?>