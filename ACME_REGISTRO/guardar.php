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

// Datos del vehículo
$placa = $_POST['placa'];
$color = $_POST['color'];
$marca = $_POST['marca'];
$tipo = $_POST['tipo'];

// Datos del conductor
$cedula_conductor = $_POST['cedula_conductor'];
$primer_nombre_conductor = $_POST['primer_nombre_conductor'];
$segundo_nombre_conductor = $_POST['segundo_nombre_conductor'];
$apellidos_conductor = $_POST['apellidos_conductor'];
$direccion_conductor = $_POST['direccion_conductor'];
$telefono_conductor = $_POST['telefono_conductor'];
$ciudad_conductor = $_POST['ciudad_conductor'];

// Datos del propietario
$cedula_propietario = $_POST['cedula_propietario'];
$primer_nombre_propietario = $_POST['primer_nombre_propietario'];
$segundo_nombre_propietario = $_POST['segundo_nombre_propietario'];
$apellidos_propietario = $_POST['apellidos_propietario'];
$direccion_propietario = $_POST['direccion_propietario'];
$telefono_propietario = $_POST['telefono_propietario'];
$ciudad_propietario = $_POST['ciudad_propietario'];

// Insertar datos del conductor
$sql_conductor = "INSERT INTO conductores (cedula, primer_nombre, segundo_nombre, apellidos, direccion, telefono, ciudad) 
VALUES ('$cedula_conductor', '$primer_nombre_conductor', '$segundo_nombre_conductor', '$apellidos_conductor', '$direccion_conductor', '$telefono_conductor', '$ciudad_conductor')";

if ($conn->query($sql_conductor) === TRUE) {
    $conductor_id = $conn->insert_id;
} else {
    echo "Error: " . $sql_conductor . "<br>" . $conn->error;
}

// Insertar datos del propietario
$sql_propietario = "INSERT INTO propietarios (cedula, primer_nombre, segundo_nombre, apellidos, direccion, telefono, ciudad) 
VALUES ('$cedula_propietario', '$primer_nombre_propietario', '$segundo_nombre_propietario', '$apellidos_propietario', '$direccion_propietario', '$telefono_propietario', '$ciudad_propietario')";

if ($conn->query($sql_propietario) === TRUE) {
    $propietario_id = $conn->insert_id;
} else {
    echo "Error: " . $sql_propietario . "<br>" . $conn->error;
}

// Insertar datos del vehículo
$sql_vehiculo = "INSERT INTO vehiculos (placa, color, marca, tipo, conductor_id, propietario_id) 
VALUES ('$placa', '$color', '$marca', '$tipo', '$conductor_id', '$propietario_id')";

if ($conn->query($sql_vehiculo) === TRUE) {
    echo "Registro exitoso!";
} else {
    echo "Error: " . $sql_vehiculo . "<br>" . $conn->error;
}

$conn->close();
?>
