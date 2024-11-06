<!-- Ejercicio1 Bloque Vectores - Jean Carlos Mejia Rodriguez -->
<!-- Recorrer un array numérico: Crea un array que contenga los nombres de 10 frutas diferentes. 
 Escribe un script que recorra el array y muestre cada fruta en una línea nueva. -->
<!DOCTYPE html>
<html>
    <body>
    <?php
    $frutas = ["platano", "mango", "manzana", "mora", "sandia", "fresa", "limon", "pera", "naranja", "tomate"];
    foreach($frutas as $fruta){
            echo $fruta . "<br>";
        }
?>