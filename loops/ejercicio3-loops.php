<!-- Ejercicio3 Bloque Loops - Jean Carlos Mejia Rodriguez -->
<!-- Crea un programa igual que el anterior pero que lance el dado mientras la suma total sea menor que 100. -->
<!DOCTYPE html>
<html>
    <body>
    <?php
// Inicializamos variables
$sumaAcumulada = 0;
$lanzamiento = 0;

// Realizamos lanzamientos hasta que la suma acumulada sea 100 o más
while ($sumaAcumulada < 100) {
    // Incrementa el contador de lanzamientos
    $lanzamiento++;

    // Genera un número aleatorio entre 1 y 6 (valor del dado)
    $valorDado = rand(1, 6);
    
    // Suma el valor del dado a la suma acumulada
    $sumaAcumulada += $valorDado;
    
    // Muestra el número de lanzamiento, el valor del dado y la suma acumulada
    echo "Lanzamiento $lanzamiento: Valor del dado = $valorDado, Suma acumulada = $sumaAcumulada<br>";
}
?>



    </body>
</html>