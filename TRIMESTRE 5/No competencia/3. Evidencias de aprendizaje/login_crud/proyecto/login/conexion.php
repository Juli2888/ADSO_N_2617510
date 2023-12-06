
<html>
<html>
<head>
<title>Pagina 2 en PHP para la
conexion con el Codigo de MYSQL
</title>
</head>
<body>
<?php

// Establecer la conexión a la base de datos MySQL
$conexion = mysqli_connect("localhost", "root", "", "registro") or die("Problemas con la conexión");

// Definir la consulta preparada para la inserción de datos
$query = "INSERT INTO usuarios (nombre, correo, confirmar_correo, contraseña, confirmar_contraseña, direccion, movil) VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conexion, $query);

// Vincular parámetros a la consulta preparada
mysqli_stmt_bind_param($stmt, "ssssssi", $_REQUEST['nombre'], $_REQUEST['correo'], $_REQUEST['confirmar_correo'], $_REQUEST['contraseña'], $_REQUEST['confirmar_contraseña'], $_REQUEST['direccion'], $_REQUEST['movil']);

// Ejecutar la consulta preparada
mysqli_stmt_execute($stmt) or die("Problemas en el insert: " . mysqli_error($conexion));
// Cerrar la conexión a la base de datos
mysqli_stmt_close($stmt);
mysqli_close($conexion);
// Mensaje de éxito
echo "El usuario fue ingresado correctamente.";

?>
</body>
</html>
