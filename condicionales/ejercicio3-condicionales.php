<!-- Ejercicio3 Bloques Condicionales - Jean Carlos Mejia Rodriguez -->
<!DOCTYPE html>
<html>
    <body>
    <?php

    $n1 = rand(0, 20);
    $n2 = rand(0, 20);
    $n3 = rand(0, 20);
    echo "Los numeros generados son: $n1, $n2, $n3 <br>";

    if ($n1 < $n2) {
        $swap = $n1;
        $n1 = $n2;
        $n2 = $swap;
    }

    if ($n1 < $n3) {
        $swap = $n1;
        $n1 = $n3;
        $n3 = $swap;
    }

    if ($n2 < $n3) {
        $swap = $n2;
        $n2 = $n3;
        $n3 = $swap;
    }
    echo "Orden: $n1, $n2, $n3";
?>

    </body>
</html>
