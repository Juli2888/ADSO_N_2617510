<?php
// Inicia la sesión para acceder a las variables de sesión
session_start();
// Verifica si la variable de sesión "s_usuario" es nula
if($_SESSION["s_usuario"] === null){
     // Redirige al usuario a la página de inicio de sesión
    header("Location: ../index.php");
    exit(); // para detener la ejecución después de redirigir
}

?>
<!doctype html>
<html>
    <head>
        <link rel="shortcut icon" href="#" />
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login con  PHP - Bootstrap 4</title>
        <!-- Enlace a la hoja de estilo de Bootstrap -->
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <!-- Enlace a la hoja de estilo personalizada -->
        <link rel="stylesheet" href="../estilos.css">
        <!-- Enlace a la hoja de estilo de SweetAlert2 -->
        <link rel="stylesheet" href="../plugins/sweetalert2/sweetalert2.min.css">            
    </head>    
    <body>
       <!-- Contenedor principal de la página de inicio -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="jumbotron">
                        
                        <h1 class="display-4 text-center">¡Bienvenido!</h1>
                      <h2 class="text-center">Usuario: <span class="badge badge-primary"><?php echo $_SESSION["s_usuario"];?></span></h2>    
                      <p class="lead text-center">Esta es la página de inicio, luego de un LOGIN correcto.</p>
                      <hr class="my-4">          
                      <a class="btn btn-danger btn-lg" href="../bd/logout.php" role="button">Cerrar Sesión</a>
                    </div>
                </div>
            </div>
        </div>        
     <script src="../jquery/jquery-3.3.1.min.js"></script>    
     <script src="../bootstrap/js/bootstrap.min.js"></script>    
     <script src="../popper/popper.min.js"></script>    
        
     <script src="../plugins/sweetalert2/sweetalert2.all.min.js"></script>    
     <script src="../codigo.js"></script>    
    </body>
</html>