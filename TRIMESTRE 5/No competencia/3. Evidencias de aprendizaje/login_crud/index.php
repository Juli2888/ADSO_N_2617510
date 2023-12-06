<!doctype html>
<html>
    <head>
         <!-- Establece el ícono de la pestaña del navegador -->
        <link rel="shortcut icon" href="#" />
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login con  PHP - Bootstrap 4</title>
        <!-- Enlace a la hoja de estilo de Bootstrap -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
           <!-- Enlace a la hoja de estilo personalizada -->
        <link rel="stylesheet" href="estilos2.css">
        <!-- Enlace a la hoja de estilo de SweetAlert2 -->
        <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">        
        <!-- Enlace a la hoja de estilo de las fuentes -->
        <link rel="stylesheet" type="text/css" href="fuentes/iconic/css/material-design-iconic-font.min.css">
        
    </head>
    
    <body>
     <!-- Contenedor principal del formulario de inicio de sesión -->
      <div class="container-login">
         <!-- Envuelve el formulario de inicio de sesión -->
        <div class="wrap-login">
            <!-- Formulario de inicio de sesión -->
            <form class="login-form validate-form" id="formLogin" action="" method="post">
                 <!-- Título del formulario -->
                <span class="login-form-title">LOGIN</span>
                  
                <!-- Campo de entrada para el usuario -->
                <div class="wrap-input100" data-validate = "Usuario incorrecto">
                    <input class="input100" type="text" id="usuario" name="usuario" placeholder="Usuario">
                    <span class="focus-efecto"></span>
                </div>
                 <!-- Campo de entrada para la contraseña -->
                <div class="wrap-input100" data-validate="Password incorrecto">
                    <input class="input100" type="password" id="password" name="password" placeholder="Password">
                    <span class="focus-efecto"></span>
                </div>
                <!-- Contenedor del botón de conexión y enlace de retorno -->
                <div class="container-login-form-btn">
                    <div class="wrap-login-form-btn">
                        <div class="login-form-bgbtn"></div>
                        <button type="submit" name="submit" class="login-form-btn">CONECTAR</button>
                        
                    </div>
                  <!-- Enlace de retorno al inicio -->
                    <p><a class="link" href="proyecto/index.html">Volver al incio</a></p>
                </div>
            </form>
        </div>
    </div>     
        
        <!-- Inclusión de scripts al final para mejorar el rendimiento -->
     <script src="jquery/jquery-3.3.1.min.js"></script>    
     <script src="bootstrap/js/bootstrap.min.js"></script>    
     <script src="popper/popper.min.js"></script>    
        
     <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>    
     <script src="codigo.js"></script>    
    </body>
</html>