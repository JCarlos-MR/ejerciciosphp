<!-- Ejercicio7 Bloque Funciones - Jean Carlos Mejia Rodriguez -->
<!-- Escribe una función que reciba un precio y un descuento y devuelva el precio una vez aplicado el descuento. -->
 <!DOCTYPE html>
<html>
    <body>
    <?php
function calcularPrecioConDescuento($precio, $descuento) {
    if (!is_numeric($precio) || !is_numeric($descuento)) {
        return "Error: ambos valores deben ser numéricos.";
    }

    $precioFinal = $precio - ($precio * ($descuento / 100));

    return round($precioFinal, 2);
}

$precioOriginal = 100;
$descuento = 20;
$precioConDescuento = calcularPrecioConDescuento($precioOriginal, $descuento);
echo "El precio después de aplicar el descuento es: $" . $precioConDescuento;
?>

</body>
</html>