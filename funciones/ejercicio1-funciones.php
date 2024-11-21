<!-- Ejercicio1 Bloque Funciones - Jean Carlos Mejia Rodriguez -->
<!-- Genera una función que reciba como parámetro un número y devuelva un booleano indicando si es primo o no. 
 Utiliza la función para calcular todos los primos entre uno y un millón. -->
 <!DOCTYPE html>
<html>
    <body>
    <?php
        function es_primo($n1):bool{
            $numerodivisores=0;

            for($contador=abs($n1);$contador>=1;$contador--){
                if (abs($n1)% $contador ==0){
                    $numerodivisores ++;
                }     
                
            }
            return ($numerodivisores==5);             
        }


    ?>

    <?php  
         
        for ($numero =1;$numero<100;$numero++){
            echo es_primo($numero)?"$numero es primo <br>":"";
        }
    ?>

</body>
</html>
