<?php
include 'conectar.php';

$action = isset($_POST['action']) ? $_POST['action'] : '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    switch ($action) {
        case 'crear':
            include 'crear2.php';
            break;
        case 'actualizar':
            include 'actualizar.php';
            break;
        case 'borrar':
            include 'borrar.php';
            break;
        case 'leer':
            include 'leer.php';
            break;
        default:
            echo "Acción no válida.";
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de acciones</title>
</head>
<body>
    <h2>Seleccione una acción a realizar</h2>
    <form method="POST">
        <label for="action">Acción:</label>
        <select name="action" id="action" required>
            <option value="" disabled selected>Seleccione una acción</option>
            <option value="crear">Crear</option>
            <option value="actualizar">Actualizar</option>
            <option value="borrar">Borrar</option>
            <option value="leer">Leer</option>
        </select>
        <br><br>

        <div id="formularioAccion">
        </div>

        <br>
        <button type="submit">Ejecutar acción</button>
    </form>

    <script>
        document.getElementById('action').addEventListener('change', function() {
            let action = this.value;
            let formularioAccion = document.getElementById('formularioAccion');
            
            formularioAccion.innerHTML = '';

            if (action === 'crear') {
                formularioAccion.innerHTML = `
                    <label for="nombre">Nombre:</label><br>
                    <input type="text" name="nombre" id="nombre" required><br><br>
                    <label for="apellido">Apellido:</label><br>
                    <input type="text" name="apellido" id="apellido" required><br><br>
                    <label for="email">Email:</label><br>
                    <input type="email" name="email" id="email" required><br><br>
                `;
            }
            else if (action === 'actualizar') {
                formularioAccion.innerHTML = `
                    <label for="id">ID del registro a actualizae:</label><br>
                    <input type="number" name="id" id="id" required><br><br>
                    <label for="nombre">Nombre:</label><br>
                    <input type="text" name="nombre" id="nombre" required><br><br>
                    <label for="apellido">Apellido:</label><br>
                    <input type="text" name="apellido" id="apellido" required><br><br>
                    <label for="email">Email:</label><br>
                    <input type="email" name="email" id="email" required><br><br>
                `;
            } else if (action === 'borrar') {
                formularioAccion.innerHTML = `
                    <label for="id">ID del registro a borrar:</label><br>
                    <input type="number" name="id" id="id" required><br><br>
                `;
            } else if (action === 'leer') {
                formularioAccion.innerHTML = '';
            }
        });
    </script>
</body>
</html>
