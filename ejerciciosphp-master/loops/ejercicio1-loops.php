<!-- Ejercicio1 Bloque Loops - Jean Carlos Mejia Rodriguez -->
<!-- Crea un programa en php que genere 20 números aleatorios entre 1 y 6 y los muestre por pantalla. -->
<!DOCTYPE html>
<html>
    <body>
    <?php
// Generamos y mostramos 20 números aleatorios entre 1 y 6
for ($i = 0; $i < 20; $i++) {
    // Generamos un número aleatorio entre 1 y 6
    $numero = rand(1, 6);
    // Muestra el número generado
    echo $numero . " ";
}
?>


    </body>
</html>