<!-- Ejercicio9 Bloque Vectores - Jean Carlos Mejia Rodriguez -->
<!-- Borrar un elemento específico de un array asociativo: Crea un array asociativo con 4 marcas de autos y sus países de origen. 
 Borra uno de los pares del array y muestra el array actualizado. -->
 <!DOCTYPE html>
<html>
    <body>
    <?php
$autos = [
    "Toyota" => "Japón",
    "Hyundai" => "Corea",
    "Volvo" => "Suecia",
    "Nissan" => "Austria"
];
unset($autos["Nissan"]); // Eliminamos "Ford"
print_r($autos);
?>