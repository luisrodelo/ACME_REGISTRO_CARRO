<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "acme";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT v.placa, v.marca, CONCAT(c.primer_nombre, ' ', c.segundo_nombre, ' ', c.apellidos) AS nombre_conductor, 
        CONCAT(p.primer_nombre, ' ', p.segundo_nombre, ' ', p.apellidos) AS nombre_propietario
        FROM vehiculos v
        JOIN conductores c ON v.conductor_id = c.id
        JOIN propietarios p ON v.propietario_id = p.id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>Placa</th><th>Marca</th><th>Nombre del Conductor</th><th>Nombre del Propietario</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["placa"]. "</td><td>" . $row["marca"]. "</td><td>" . $row["nombre_conductor"]. "</td><td>" . $row["nombre_propietario"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}

$conn->close();
?>
