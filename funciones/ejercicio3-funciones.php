<!-- Ejercicio3 Bloque Funciones - Jean Carlos Mejia Rodriguez -->
<!-- Escribe una función que convierta temperaturas de Celsius a Fahrenheit y viceversa. 
 La función debe recibir la temperatura y la escala ("C" o "F") y devolver la temperatura convertida. -->
 <!DOCTYPE html>
<html>
    <body>
    <?php
function convertirTemperatura($temperatura, $escala) {
    if ($escala == "C") {
        $convertida = ($temperatura * 9/5) + 32;
        $nuevaEscala = "F";
    } elseif ($escala == "F") {
        $convertida = ($temperatura - 32) * 5/9;
        $nuevaEscala = "C";
    } else {
        return "Escala no válida. Usa 'C' para Celsius o 'F' para Fahrenheit.";
    }

    return $convertida . "°" . $nuevaEscala;
}

echo convertirTemperatura(25, "C"); 
echo "\n";
echo convertirTemperatura(77, "F");
?>

</body>
</html>