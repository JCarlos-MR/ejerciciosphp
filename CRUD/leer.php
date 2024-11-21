<?php
include 'conectar.php';

try {
    $sql = "SELECT * FROM usuarios";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border=1><tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Email</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["id"]."</td><td>".$row["nombre"]."</td><td>".$row["apellido"]."</td><td>".$row["email"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 resultados";
    }
} catch (mysqli_sql_exception $e) {
    echo "Error: " . $e->getMessage();
} finally {
    $conn->close();
}
?>
