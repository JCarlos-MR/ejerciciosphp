<!-- Ejercicio4 Bloque Loops - Jean Carlos Mejia Rodriguez -->
<!-- Crea un programa con una variable aleatoria entre  1 y 50 y escriba la tabla de multiplicar de dicho número. -->
<!DOCTYPE html>
<html>
    <body>
    <?php
// Generamos un número aleatorio entre 1 y 50
$numeroAleatorio = rand(1, 50);
// Mostramos el número generado
echo "Número aleatorio generado: $numeroAleatorio<br><br>";
// Mostramos la tabla de multiplicar del número aleatorio
echo "Tabla de multiplicar del $numeroAleatorio:<br>";
for ($i = 1; $i <= 10; $i++) {
    $resultado = $numeroAleatorio * $i;
    echo "$numeroAleatorio x $i = $resultado<br>";
}
?>