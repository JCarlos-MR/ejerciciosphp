<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL) && str_ends_with($email, '@iespabloserrano.com')) {
        echo "El correo es válido: $email";
    } else {
        http_response_code(400);
        echo "Error: El correo debe pertenecer al dominio @iespabloserrano.com";
    }
} else {
    http_response_code(400);
    echo "Error: Solicitud inválida.";
}
?>
