<!-- Ejercicio2 Bloque Loops - Jean Carlos Mejia Rodriguez -->
<!-- Crea un programa que simule el lanzamiento de un dado 10 veces. 
 Lanzamiento debe mostrar el numero de lanzamiento, el valor del dado y la suma acumulada. -->
<!DOCTYPE html>
<html>
    <body>
    <?php
// Inicializamos la suma acumulada en 0
$sumaAcumulada = 0;

// Realizamos 10 lanzamientos de dado
for ($i = 1; $i <= 10; $i++) {
    // Genera un número aleatorio entre 1 y 6 (valor del dado)
    $valorDado = rand(1, 6);
    
    // Suma el valor del dado a la suma acumulada
    $sumaAcumulada += $valorDado;
    
    // Muestra el número de lanzamiento, el valor del dado y la suma acumulada
    echo "Lanzamiento $i: Valor del dado = $valorDado, Suma acumulada = $sumaAcumulada<br>";
}
?>


    </body>
</html>