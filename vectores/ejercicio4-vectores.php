<!-- Ejercicio4 Bloque Vectores - Jean Carlos Mejia Rodriguez -->
<!-- Borrar un elemento específico de un array numérico: Crea un array con los nombres de 5 colores. 
 Borra el segundo color del array y muestra el array actualizado. -->
 <!DOCTYPE html>
<html>
    <body>
    <?php
$colores = ["Morado", "Fucsia", "Granate", "Dorado", "Turquesa"];
unset($colores[1]);
$colores = array_values($colores);
print_r($colores);
?>