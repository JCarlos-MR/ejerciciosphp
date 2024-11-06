<!-- Ejercicio3 Bloque Vectores - Jean Carlos Mejia Rodriguez -->
<!-- Modificar un elemento específico de un array numérico: Crea un array con los nombres de 5 animales. 
 Modifica el tercer elemento del array para que sea otro animal diferente y muestra el array actualizado. -->
 <!DOCTYPE html>
<html>
    <body>
    <?php
    $animales = ["Conejo", "Cangrejo", "Mosca", "Pez", "Paloma"];
    $animales[2] = "Rinoceronte";
    print_r($animales);
?>