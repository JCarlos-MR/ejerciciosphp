<!-- Ejercicio6 Bloque Loops - Jean Carlos Mejia Rodriguez -->
<!-- Crea un programa con una variable $n1 a la que daremos valor en el código. 
 El programa mostrará todos los divisores de ese número. -->
<!DOCTYPE html>
<html>
    <body>
    <?php
// Definimos la variable $n1
$n1 = 36; // Puedes cambiar este valor por el número que desees

// Mostramos un mensaje inicial
echo "Los divisores de $n1 son: ";

// Usamos un bucle para encontrar y mostrar los divisores
for ($i = 1; $i <= $n1; $i++) {
    if ($n1 % $i == 0) {
        echo $i . " "; // Imprimimos el divisor directamente
    }
}
?>
