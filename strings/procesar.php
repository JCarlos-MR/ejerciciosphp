<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
    $numero1 = (float) $_POST['numero1'];
    $numero2 = (float) $_POST['numero2'];
    
    // Mensaje de bienvenida
    echo "<h2>Bienvenido: $nombre $apellido</h2>";

    // Escribir el nombre y el apellido al revés
    $nombre_reves = strrev($nombre);
    $apellido_reves = strrev($apellido);
    echo "Nombre al revés: " . $nombre_reves . "<br>";
    echo "Apellido al revés: " . $apellido_reves . "<br>";

    // Contar las letras del nombre y apellido
    $longitud_nombre = strlen($nombre);
    $longitud_apellido = strlen($apellido);
    $longitud_total = $longitud_nombre + $longitud_apellido;
    echo "Letras en el nombre: " . $longitud_nombre . "<br>";
    echo "Letras en el apellido: " . $longitud_apellido . "<br>";
    echo "Total de letras: " . $longitud_total . "<br>";

    // Escribir nombre y apellido en mayúsculas
    echo "Nombre en mayúsculas: " . strtoupper($nombre) . "<br>";
    echo "Apellido en mayúsculas: " . strtoupper($apellido) . "<br>";

    // Imprimir el primer y último carácter del nombre y apellido
    echo "Primera letra del nombre: " . $nombre[0] . "<br>";
    echo "Última letra del nombre: " . $nombre[strlen($nombre) - 1] . "<br>";
    echo "Primera letra del apellido: " . $apellido[0] . "<br>";
    echo "Última letra del apellido: " . $apellido[strlen($apellido) - 1] . "<br>";

    // Cambiar todas las vocales del nombre y apellido por la "u"
    $nombre_modificado = str_ireplace(['a', 'e', 'i', 'o', 'u'], 'u', $nombre);
    $apellido_modificado = str_ireplace(['a', 'e', 'i', 'o', 'u'], 'u', $apellido);
    echo "Nombre con vocales cambiadas por 'u': " . $nombre_modificado . "<br>";
    echo "Apellido con vocales cambiadas por 'u': " . $apellido_modificado . "<br>";

    // Operaciones matemáticas con los dos números
    $suma = $numero1 + $numero2;
    $diferencia = $numero1 - $numero2;
    $producto = $numero1 * $numero2;
    $cociente = $numero2 != 0 ? $numero1 / $numero2 : 'División por cero no permitida';

    echo "<h2>Resultados de los números:</h2>";
    echo "Suma: " . $suma . "<br>";
    echo "Diferencia: " . $diferencia . "<br>";
    echo "Producto: " . $producto . "<br>";
    echo "Cociente: " . $cociente . "<br>";
}
?>


