<!-- Ejercicio7 Bloque Loops - Jean Carlos Mejia Rodriguez -->
<!-- Partiendo del programa anterior indica si el número es primo o no. -->
<!DOCTYPE html>
<html>
    <body>
    <?php
// Definimos la variable $n1
$n1 = 36; // Puedes cambiar este valor por el número que desees

// Inicializamos un contador de divisores
$contadorDivisores = 0;

// Mostramos un mensaje inicial
echo "Los divisores de $n1 son: ";

// Usamos un bucle para encontrar y mostrar los divisores
for ($i = 1; $i <= $n1; $i++) {
    if ($n1 % $i == 0) {
        echo $i . " "; // Imprimimos el divisor directamente
        $contadorDivisores++; // Incrementamos el contador de divisores
    }
}

// Determinamos si el número es primo
if ($contadorDivisores == 2) {
    echo "\n$n1 es un número primo.";
} else {
    echo "\n$n1 no es un número primo.";
}
?>
