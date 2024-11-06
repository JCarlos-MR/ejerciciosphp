<!-- Ejercicio6 Bloque Vectores - Jean Carlos Mejia Rodriguez -->
<!-- Recorrer un array asociativo: Crea un array asociativo con los nombres y edades de 5 personas. 
 Escribe un script que recorra el array y muestre cada nombre y su edad en una línea nueva. -->
 <!DOCTYPE html>
<html>
    <body>
    <?php
$personas = [
    "Vicente" => 28,
    "Dario" => 34,
    "Maria" => 22,
    "Eustaquio" => 40,
    "Romero" => 19
];
foreach ($personas as $nombre => $edad) {
    echo "$nombre tiene $edad años<br>";
}

?>