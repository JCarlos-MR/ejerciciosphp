<?php
$errores = [];

if (empty($_POST['nombre']) || !preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{2,50}$/", $_POST['nombre'])) {
    $errores[] = "El nombre es inválido. Solo se permiten letras y espacios, entre 2 y 50 caracteres.";
}

if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errores[] = "El correo electrónico no es válido.";
}

if (empty($_POST['comentario']) || strlen(trim($_POST['comentario'])) < 5) {
    $errores[] = "El comentario debe tener al menos 5 caracteres.";
}

if (empty($_POST['genero']) || !in_array($_POST['genero'], ['masculino', 'femenino', 'otro'])) {
    $errores[] = "Debes seleccionar un género válido.";
}

if (!empty($errores)) {
    echo "<h1>Errores en el formulario:</h1>";
    echo "<ul>";
    foreach ($errores as $error) {
        echo "<li>$error</li>";
    }
    echo "</ul>";
    echo "<a href='javascript:history.back()'>Volver al formulario</a>";
} else {
    echo "<h1>Formulario enviado correctamente</h1>";
    echo "<p>Nombre: " . htmlspecialchars($_POST['nombre']) . "</p>";
    echo "<p>Email: " . htmlspecialchars($_POST['email']) . "</p>";
    echo "<p>Comentario: " . htmlspecialchars($_POST['comentario']) . "</p>";
    echo "<p>Género: " . htmlspecialchars($_POST['genero']) . "</p>";
}
?>
