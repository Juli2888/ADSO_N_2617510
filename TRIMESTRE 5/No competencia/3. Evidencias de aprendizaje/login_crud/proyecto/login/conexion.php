
<html>
<html>
<head>
<title>Pagina 2 en PHP para la
conexion con el Codigo de MYSQL
</title>
</head>
<body>
<?php


$conexion = mysqli_connect("localhost", "root", "", "registro") or die("Problemas con la conexión");

// Utilizar consultas preparadas para evitar inyección de SQL
$query = "INSERT INTO usuarios (nombre, correo, confirmar_correo, contraseña, confirmar_contraseña, direccion, movil) VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conexion, $query);

// Vincular parámetros
mysqli_stmt_bind_param($stmt, "ssssssi", $_REQUEST['nombre'], $_REQUEST['correo'], $_REQUEST['confirmar_correo'], $_REQUEST['contraseña'], $_REQUEST['confirmar_contraseña'], $_REQUEST['direccion'], $_REQUEST['movil']);

// Ejecutar la consulta
mysqli_stmt_execute($stmt) or die("Problemas en el insert: " . mysqli_error($conexion));

mysqli_stmt_close($stmt);
mysqli_close($conexion);

echo "El usuario fue ingresado correctamente.";

?>
</body>
</html>
