<!-- Ejercicio4 Bloques Condicionales - Jean Carlos Mejia Rodriguez -->
<!DOCTYPE html>
<html>
    <body>
    <?php
$lluvia = (bool)rand(0, 1);
$temperatura =  rand(-10, 40);
echo "Temperatura = $temperatura <br>";

if ($temperatura < -10 || $temperatura > 40) {
    echo "La temperatura es $temperatura y es una temperatura extrema. No se puede realizar actividad.";
} elseif ($lluvia) {
    echo "Hoy llueve y debes quedarte en casa.";
} elseif ($temperatura > 20) {
    echo "La temperatura es $temperatura y no llueve. A la playa";
} elseif ($temperatura >= -10 && $temperatura <= 5) {
    echo "La temperatura es $temperatura y no llueve. A esquiar";
} elseif ($temperatura > 5 && $temperatura <= 20) {
    echo "La temperatura es $temperatura y no llueve. De paseo";
}
?>


    </body>
</html>