<!-- Ejercicio4 Bloque Funciones - Jean Carlos Mejia Rodriguez -->
<!-- Escribe una función que calcule el área y el perímetro de un rectángulo. 
 La función debe recibir el largo y el ancho como parámetros y devolver un array con el área y el perímetro. -->
 <!DOCTYPE html>
<html>
    <body>
    <?php
function calcularAreaYPerimetro($largo, $ancho) {
    $area = $largo * $ancho;
    $perimetro = 2 * ($largo + $ancho);
    
    return array(
        'area' => $area,
        'perimetro' => $perimetro
    );
}


$largo = 5;
$ancho = 3;
$resultado = calcularAreaYPerimetro($largo, $ancho);

echo "Área: " . $resultado['area'] . "\n";
echo "Perímetro: " . $resultado['perimetro'] . "\n";
?>

</body>
</html>