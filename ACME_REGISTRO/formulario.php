<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="'https://fonts.googleapis.com/css2? family= Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,300 & display=swap'">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Registro de Vehículos</title>
</head>
<body>
    <h1>Registro de Vehículos</h1>
   <section id="container">
    <form action="guardar.php" method="POST">
        <h2>Datos del Vehículo</h2>
        Placa: <input type="text" name="placa" required><br>
        Color: <input type="text" name="color" required><br>
        Marca: <input type="text" name="marca" required><br>
        Tipo: 
        <select name="tipo" required>
            <option value="particular">Particular</option>
            <option value="publico">Público</option>
        </select><br>

        <h2>Datos del Conductor</h2>
        Cédula: <input type="text" name="cedula_conductor" required><br>
        Primer Nombre: <input type="text" name="primer_nombre_conductor" required><br>
        Segundo Nombre: <input type="text" name="segundo_nombre_conductor"><br>
        Apellidos: <input type="text" name="apellidos_conductor" required><br>
        Dirección: <input type="text" name="direccion_conductor" required><br>
        Teléfono: <input type="text" name="telefono_conductor" required><br>
        Ciudad: <input type="text" name="ciudad_conductor" required><br>

        <h2>Datos del Propietario</h2>
        Cédula: <input type="text" name="cedula_propietario" required><br>
        Primer Nombre: <input type="text" name="primer_nombre_propietario" required><br>
        Segundo Nombre: <input type="text" name="segundo_nombre_propietario"><br>
        Apellidos: <input type="text" name="apellidos_propietario" required><br>
        Dirección: <input type="text" name="direccion_propietario" required><br>
        Teléfono: <input type="text" name="telefono_propietario" required><br>
        Ciudad: <input type="text" name="ciudad_propietario" required><br>

        <input type="submit" value="Registrar">
    </form>
  </section>
</body>
</html>
