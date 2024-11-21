<!-- Ejercicio2 Bloque Funciones - Jean Carlos Mejia Rodriguez -->
<!-- Escribe una función que calcule el IMC de una persona dado su peso y altura. 
 La función debe devolver el IMC y la categoría correspondiente (bajo peso, peso normal, sobrepeso, obesidad). -->
 <!DOCTYPE html>
<html>
    <body>
    <?php

function calcularIMC($peso, $altura) {
    $imc = $peso / ($altura * $altura);
    if ($imc < 18.5) {
        $categoria = 'Bajo peso';
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        $categoria = 'Peso normal';
    } elseif ($imc >= 25 && $imc < 29.9) {
        $categoria = 'Sobrepeso';
    } else {
        $categoria = 'Obesidad';
    }
    
    return ['imc' => $imc, 'categoria' => $categoria];
}

$peso = 58;
$altura = 1.70;

$resultado = calcularIMC($peso, $altura);

echo "IMC: " . round($resultado['imc'], 2) . "\n";
echo "Categoría: " . $resultado['categoria'] . "\n";

?>

</body>
</html>
