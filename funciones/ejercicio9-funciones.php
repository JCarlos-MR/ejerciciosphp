<!-- Ejercicio9 Bloque Funciones - Jean Carlos Mejia Rodriguez -->
<!-- Realiza una función que reciba como parámetro una contraseña y devuelva un booleano indicando si es valida o no. 
 Contraseña válida mas de 8 caracteres y al menos un carácter no numérico y mayúsculas y minúsculas. -->

 <!DOCTYPE html>
<html>
    <body>
    <?php
function validar_contraseña($contraseña) {
    if (strlen($contraseña) <= 8) {
        return false;
    }
    if (!preg_match('/[^\d]/', $contraseña)) {
        return false;
    }
    if (!preg_match('/[A-Z]/', $contraseña) || !preg_match('/[a-z]/', $contraseña)) {
        return false;
    }
    return true;
}

$contraseña = "dhjkSGHJ4";
if (validar_contraseña($contraseña)) {
    echo "La contraseña es válida.";
} else {
    echo "La contraseña no es válida.";
}
?>

</body>
</html>