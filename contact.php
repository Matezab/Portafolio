<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$base_de_datos = "contacto";

$conexion = new mysqli($servidor, $usuario, $contrasena, $base_de_datos);

if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $conexion->real_escape_string($_POST["name"]);
    $correo = $conexion->real_escape_string($_POST["email"]);
    $mensaje = $conexion->real_escape_string($_POST["message"]);

    if (!empty($nombre) && !empty($correo) && !empty($mensaje)) {
        $sql = "INSERT INTO mensajes (nombre, correo, mensaje) VALUES ('$nombre', '$correo', '$mensaje')";

        if ($conexion->query($sql) === TRUE) {
            echo "<div style='text-align: center; margin-top: 20px;'>
                    <h3>Gracias por tu mensaje, $nombre. Pronto te responderemos.</h3>
                    <a href='index.html'>Volver a Inicio</a>
                  </div>";
        } else {
            echo "Error: " . $sql . "<br>" . $conexion->error;
        }
    } else {
        echo "<div style='text-align: center; margin-top: 20px;'>
                <h3>Por favor, completa todos los campos.</h3>
                <a href='index.html'>Volver a Intentar</a>
              </div>";
    }
}

$conexion->close();
?>