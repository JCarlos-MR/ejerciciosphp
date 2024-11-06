<!-- Ejercicio11 Bloque Vectores - Jean Carlos Mejia Rodriguez -->
<!--  Ordenar un array asociativo por valor: Crea un array asociativo con 5 nombres de productos y sus precios. 
  Ordena el array por precio en orden ascendente y muestra el array ordenado.-->
 <!DOCTYPE html>
<html>
    <body>
    <?php
$productos_precios = [
  "ProductoA" => 5.00,
  "ProductoB" => 22.50,
  "ProductoC" => 30.00,
  "ProductoD" => 10.00,
  "ProductoE" => 8.50
];
asort($productos_precios);
print_r($productos_precios);

?>