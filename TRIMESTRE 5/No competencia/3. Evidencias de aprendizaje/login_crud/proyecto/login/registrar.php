<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="estilos.css">
	

</head>  
<body>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conexion = mysqli_connect("localhost", "root", "", "faproltex") or die("Problemas con la conexión");

    // Utilizar consultas preparadas para evitar inyección de SQL
    $query = "INSERT INTO clientes (nombre, contraseña, direccion, correo, movil) VALUES (?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conexion, $query);
    $contraseñaEncriptada = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);
    // Vincular parámetros
    mysqli_stmt_bind_param($stmt, "sssss", $_POST['nombre'], $contraseñaEncriptada, $_POST['direccion'], $_POST['correo'], $_POST['movil']);

    // Ejecutar la consulta
    if (mysqli_stmt_execute($stmt)) {
        echo "El usuario fue registrado correctamente.";
    } else {
        echo "Error al registrar usuario: " . mysqli_error($conexion);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conexion);
}
?>

   
 <form class="formulario" action="" method="post">
    
    <h1>Registrate</h1>
     <div class="contenedor">
     
     <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" name="nombre" placeholder="Nombre Completo" >
         
         </div>
         
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="password" name="contraseña" placeholder="Ingrese su contraseña" >
         
         </div>
         <div class="input-contenedor">
            <i class="fas fa-envelope icon"></i>
            <input type="text" name="direccion" placeholder="direccion" >
            
            </div>         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="text" name="correo" placeholder="correo" >
         
         </div>
         
            
          <div class="input-contenedor">
                <i class="fas fa-envelope icon"></i>
                <input type="text" name="movil" placeholder="Movil" >
            </div>
                     
         <input type="submit" value="Registrate" class="button">
         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿Ya tienes una cuenta?<a class="link" href="loginvista.html">Iniciar Sesion</a></p>
         <p><a class="link" href="../index.html">Volver al incio</a></p>
     </div>
    </form>
</body>
</html>