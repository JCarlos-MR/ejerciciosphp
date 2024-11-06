<!-- Ejercicio8 Bloque Vectores - Jean Carlos Mejia Rodriguez -->
<!-- Modificar un elemento específico de un array asociativo: Crea un array asociativo con los nombres de 4 países y sus capitales. 
 Modifica la capital de uno de los países y muestra el array actualizado. -->
 <!DOCTYPE html>
<html>
    <body>
    <?php
$paises = [
    "Bulgaria" => "Sofia",
    "Argentina" => "Buenos Aires",
    "Brasil" => "Brasilia",
    "Austria" => "VIena"
];
$paises["Argentina"] = "Rosario"; // Cambiamos la capital de Argentina
print_r($paises);
?>