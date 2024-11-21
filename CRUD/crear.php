<?php
include 'conectar.php';

try {
    // Valores que se insertarán en la base de datos
    $nombre = "Carlos";
    $apellido = "Rodriguez";
    $email = "c.rodriguez@example.com";

    // Consulta SQL para insertar los valores
    $sql = "INSERT INTO usuarios (nombre, apellido, email) VALUES (?, ?, ?)";

    //preparamos una plantilla para la instruccion sql los valores ?,?,? serán asignados luego
    
    $stmt = $conn->prepare($sql); //se convierte $sql en una pre instrucción
    $stmt->bind_param("sss", $nombre, $apellido, $email); //se le dan valores a los ?
    // "sss" son los tipos de datos. string string string

    $stmt->execute(); //ejecutamos la sentencia

    echo "Nuevo registro creado exitosamente";
} catch (mysqli_sql_exception $e) {
    echo "Error: " . $e->getMessage();
} finally {
    // Cerrar la conexión
    $conn->close();
}
?>