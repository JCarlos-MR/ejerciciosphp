<!-- Ejercicio5 Bloque Loops - Jean Carlos Mejia Rodriguez -->
<!-- Crea un programa con una variable $n1 a la que daremos valor en el código. 
 Escribe todos los números de $n1 al 0 contando hacia atrás. 
 Si el número es negativo deberá cambiar su valor a positivo.
 -->
<!DOCTYPE html>
<html>
    <body>
    <?php
// Definimos la variable $n1 y le asignamos un valor
$n1 = 10;
// Si $n1 es negativo, lo convertimos a positivo
if ($n1 < 0) {
    $n1 = abs($n1); // abs() devuelve el valor absoluto (positivo) del número
}
// Mostramos los números de $n1 a 0 contando hacia atrás
for ($i = $n1; $i >= 0; $i--) {
    echo $i . "<br>"; // Imprime cada número en una nueva línea
}
?>

