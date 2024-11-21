<?php
function obtenerHoroscopoChino($año) {
    $animales = [
        "Rata", "Buey", "Tigre", "Conejo", "Dragón", "Serpiente", 
        "Caballo", "Cabra", "Mono", "Gallo", "Perro", "Cerdo"
    ];
    $cualidades = [
        "Rata" => "Inteligente, adaptable, encantador y creativo.",
        "Buey" => "Fuerte, confiable, metódico y calmado.",
        "Tigre" => "Valiente, competitivo, impredecible y confiado.",
        "Conejo" => "Cariñoso, elegante, amable y responsable.",
        "Dragón" => "Enérgico, valiente, determinado y exitoso.",
        "Serpiente" => "Sabia, encantadora, intuitiva y refinada.",
        "Caballo" => "Libre, trabajador, amigable y dinámico.",
        "Cabra" => "Dulce, compasiva, artística y pacífica.",
        "Mono" => "Inteligente, curioso, inventivo y juguetón.",
        "Gallo" => "Observador, trabajador, valiente y preciso.",
        "Perro" => "Leal, honesto, protector y cariñoso.",
        "Cerdo" => "Generoso, compasivo, diligente y amable."
    ];
    $indice = ($año - 4) % 12; 
    $animal = $animales[$indice];
    return [$animal, $cualidades[$animal]];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fechaNacimiento = $_POST['fecha_nacimiento'];

    if ($fechaNacimiento) {
        $fechaNacimientoDateTime = new DateTime($fechaNacimiento);
        $fechaActual = new DateTime();
        $edad = $fechaActual->diff($fechaNacimientoDateTime)->y;
        $añoNacimiento = $fechaNacimientoDateTime->format('Y');
        [$horoscopo, $descripcion] = obtenerHoroscopoChino($añoNacimiento);

        echo "<!DOCTYPE html>
        <html lang='es'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Tu Horóscopo Chino</title>
            <style>
                body { font-family: Arial, sans-serif; text-align: center; background-color: #f4f4f4; padding: 20px; }
                img { max-width: 200px; margin: 20px auto; }
                .resultado { background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); }
            </style>
        </head>
        <body>
            <div class='resultado'>
                <h1>Tu Edad y Horóscopo Chino</h1>
                <p>Tu fecha de nacimiento es: <strong>" . htmlspecialchars($fechaNacimiento) . "</strong></p>
                <p>Tu edad es: <strong>$edad años</strong>.</p>
                <p>Tu horóscopo chino es: <strong>$horoscopo</strong>.</p>
                <img src='imagenes/$horoscopo.png' alt='$horoscopo'>
                <p><strong>Cualidades:</strong> $descripcion</p>
            </div>
        </body>
        </html>";
    } else {
        echo "<p>Por favor, introduce una fecha válida.</p>";
    }
} else {
    echo "<p>Por favor, accede al formulario para calcular tu horóscopo.</p>";
}
?>
