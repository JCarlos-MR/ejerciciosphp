<!-- Ejercicio10 Bloque Vectores - Jean Carlos Mejia Rodriguez -->
<!-- Ordenar un array asociativo por clave Crea un array asociativo con 5 nombres de empleados y sus salarios. 
 Ordena el array por nombre en orden ascendente y muestra el array ordenado. -->
 <!DOCTYPE html>
<html>
    <body>
    <?php
$empleados_salarios = [
    "Carlos" => 2000,
    "Ana" => 1500,
    "Luis" => 1800,
    "Marta" => 1200,
    "Pedro" => 1700
];
ksort($empleados_salarios);
print_r($empleados_salarios);
?>