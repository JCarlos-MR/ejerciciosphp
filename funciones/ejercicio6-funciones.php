<!-- Ejercicio6 Bloque Funciones - Jean Carlos Mejia Rodriguez -->
<!-- Escribe una función que calcule el promedio y la mediana de un array de números. 
 La función debe recibir el array y devolver un array con el promedio y la mediana. -->
 <!DOCTYPE html>
<html>
    <body>
    <?php

function calcularPromedioYMediana($numeros) {
    if (empty($numeros)) {
        return ["promedio" => null, "mediana" => null];
    }

    $promedio = array_sum($numeros) / count($numeros);

    sort($numeros);
    $count = count($numeros);
    $middle = floor($count / 2);

    if ($count % 2 == 0) {
        $mediana = ($numeros[$middle - 1] + $numeros[$middle]) / 2;
    } else {
        $mediana = $numeros[$middle];
    }

    return ["promedio" => $promedio, "mediana" => $mediana];
}

$numeros = [4, 10, 15, 20, 24, 28, 32, 45, 54, 67];
$resultado = calcularPromedioYMediana($numeros);

echo "Promedio: " . $resultado["promedio"] . "\n";
echo "Mediana: " . $resultado["mediana"] . "\n";
?>

</body>
</html>