<?php
// Verificar si se han enviado datos por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger datos del formulario
    $correo = isset($_POST["correo"]) ? $_POST["correo"] : '';
    $contraseña = isset($_POST["contraseña"]) ? trim($_POST["contraseña"]) : '';

    // Establecer conexión a la base de datos (reemplaza con tus propias credenciales)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "faproltex";
    
    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
    
    // Consulta SQL para verificar credenciales
    $sql = "SELECT * FROM clientes WHERE correo = '$correo'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Usuario encontrado, verificar la contraseña usando password_verify
        $row = $result->fetch_assoc();
        $hashAlmacenado = $row['contraseña'];

        // Verificar la contraseña utilizando password_verify
        $verificacion = password_verify($contraseña, $hashAlmacenado);

        if ($verificacion) {
            // Credenciales válidas, el usuario está autenticado
            // Redirigir al usuario a index.html
            header("Location: ../../proyecto/indexyalogeado.html");
            exit(); // Asegúrate de salir después de la redirección
        } else {
            // Contraseña incorrecta
            echo "Credenciales incorrectas";
        }
    } else {
        // Usuario no encontrado
        echo "Credenciales incorrectas";
    }

    // Cerrar conexión
    $conn->close();
}
?>