<!-- Ejercicio5 Bloque Vectores - Jean Carlos Mejia Rodriguez -->
<!-- Ordenar un array numérico: Crea un array con los nombres de 7 deportes en desorden. 
 Ordena el array alfabéticamente y muestra el array ordenado. -->
 <!DOCTYPE html>
<html>
    <body>
    <?php
$deportes = ["Volley", "Padel", "Futbol", "Karate", "Powerlifting", "Baloncesto", "Atletismo"];
sort($deportes);
print_r($deportes);

?>