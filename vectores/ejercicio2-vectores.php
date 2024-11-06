<!-- Ejercicio2 Bloque Vectores - Jean Carlos Mejia Rodriguez -->
<!-- Añadir elementos a un array numérico: 
 Crea un array vacío. Añade cinco nombres de ciudades al array y muestra el array completo en pantalla. -->
 <!DOCTYPE html>
<html>
    <body>
    <?php
    $ciudades = [];
    array_push($ciudades, "Bucarest", "Berlin", "Barcelona", "Texas", "Loja", "Cali");
    print_r($ciudades);
?>