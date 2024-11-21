<!-- Ejercicio5 Bloque Funciones - Jean Carlos Mejia Rodriguez -->
<!-- Escribe una función que genere una contraseña aleatoria. 
 Longitud entre 8 y 12 caracteres, al menos un carácter entre "@#$%&-" -->
 <!DOCTYPE html>
<html>
    <body>
    <?php
function generarContrasenaAleatoria() {
    $minusculas = 'abcdefg';
    $mayusculas = 'ABCDEFG';
    $numeros = '0123456789';
    $caracteresEspeciales = '@#$%&-';

    $longitud = rand(8, 12);
    
    $contrasena = $caracteresEspeciales[rand(0, strlen($caracteresEspeciales) - 1)];

    $todosLosCaracteres = $minusculas . $mayusculas . $numeros . $caracteresEspeciales;
    for ($i = 1; $i < $longitud; $i++) {
        $contrasena .= $todosLosCaracteres[rand(0, strlen($todosLosCaracteres) - 1)];
    }

    return str_shuffle($contrasena);
}

echo "Contraseña generada: " . generarContrasenaAleatoria();
?>

</body>
</html>