<!-- Ejercicio11 Bloque Vectores - Jean Carlos Mejia Rodriguez -->
 <?php
$asignaturas = [
    "Lengua" => [3, 5, 4, 6, 7],
    "Mates" => [7, 8, 6, 9, 8]
];

foreach ($asignaturas as $nombreAsignatura => $notas) {
    // Calcular la media
    $media = array_sum($notas) / count($notas);

    // Obtener dos notas para la frase
    $nota1 = $notas[0];
    $nota2 = $notas[1];

    // Imprimir la frase
    echo "Juan ha sacado un $nota1 y un $nota2 en $nombreAsignatura, y su media es " . round($media, 2) . ".<br>";
}
?>

  </body>
  </html>