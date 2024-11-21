<!-- Ejercicio8 Bloque Funciones - Jean Carlos Mejia Rodriguez -->
<!-- Escribe una función que reciba una serie de números como parámetro, 
 la cantidad de números puede ser variable, y devuelva el número que más veces aparece. -->
<!DOCTYPE html>
<html>
    <body>
    <?php
function numero_mas_frecuente(...$numeros) {
    if (empty($numeros)) {
        return null; }

    $frecuencia = array_count_values($numeros); 
    ¡arsort($frecuencia); 

    $numero_mas_frecuente = array_key_first($frecuencia);
    return $numero_mas_frecuente;
}

$numeros = [1, 1, 1, 2, 2, 3, 4, 4, 4, 5];
echo "El número que más veces aparece es: " . numero_mas_frecuente(...$numeros);
?>
</body>
</html>