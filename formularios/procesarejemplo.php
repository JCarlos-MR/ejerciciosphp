<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $comentario = $_POST['comentario'];
    $genero = $_POST['genero'] ?? null;

    if (empty($nombre) || empty($email) || empty($comentario) || empty($opcion)) {
        die("Todos los campos son obligatorios.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("El formato del email es inválido.");
    }

    echo "Nombre: $nombre<br>";
    echo "Email: $email<br>";
    echo "Comentario: $comentario<br>";
    echo "Opción: $opcion<br>";
}
?>