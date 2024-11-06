<!-- Ejercicio1 Bloques Condicionales - Jean Carlos Mejia Rodriguez -->
<!DOCTYPE html>
<html>
    <body>
        <?php
        //Con rand generamos un numero entre -10 y 10
        $numero = rand(-10, 10) ;
        //Aqui mostramos el numero al azar
        echo "El numero es $numero <br>";
        //Si la variable es mayor a 0 el numero es Positivo
        if ($numero > 0) {
            echo "El Numero es Positivo";
        }
        elseif ($numero ==0) {
            echo "El numero es 0";
          } 
        else{
            echo "El Numero es Negativo";
        }
        ?>

    </body>
</html>