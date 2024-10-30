<!-- Ejercicio4 Bloques Condicionales - Jean Carlos Mejia Rodriguez -->
<!DOCTYPE html>
<html>
    <body>
    <?php

    $numero = rand(1, 7);
    echo "Numero Aleatorio: $numero <br>";
    
    switch ($numero) {
        case "1":
          echo "Hoy es Lunes";
          break;
        case "2":
          echo "Hoy es Martes";
          break;
        case "3":
          echo "Hoy es Miercoles";
          break;
        case "4":
            echo "Hoy es Jueves";
            break;
        case "5":
            echo "Hoy es Viernes";
            break;
        case "6":
            echo "Hoy es Sabado";
            break;
        default:
          echo "Hoy es Domingo";
      }
?>

    </body>
</html>