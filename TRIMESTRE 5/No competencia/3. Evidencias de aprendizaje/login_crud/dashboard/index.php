// Incluye la parte superior de la página
<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container">
    <h1>Gestion de usuarios</h1>
    
    
    
 <?php
  // Conecta a la base de datos
include_once 'bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
// Consulta SQL para obtener los datos de clientes
$consulta = "SELECT id, nombre, contraseña, direccion,correo,movil FROM clientes";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>


<div class="container">
        <div class="row">
            <div class="col-lg-12">            
            <button id="btnNuevo" type="button" class="btn btn-success" data-toggle="modal">Nuevo</button>    
            </div>    
        </div>    
    </div>    
    <br>  
<div class="container">
        <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="tablaClientes" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Contraseña</th>                                
                                <th>Direccion</th>  
                                <th>Correo</th>
                                <th>Movil</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php      
                            // Itera sobre los datos obtenidos y muestra en la tabla                      
                            foreach($data as $dat) {                                                        
                            ?>
                            <tr>
                                <td><?php echo $dat['id'] ?></td>
                                <td><?php echo $dat['nombre'] ?></td>
                                <td><?php echo $dat['contraseña'] ?></td>
                                <td><?php echo $dat['direccion'] ?></td>    
                                <td><?php echo $dat['correo'] ?></td>  
                                <td><?php echo $dat['movil'] ?></td>  
                                <td></td>
                            </tr>
                            <?php
                                }
                            ?>                                
                        </tbody>        
                       </table>                    
                    </div>
                </div>
        </div>  
    </div>    
      
<!--Modal para CRUD-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formPersonas">    
            <div class="modal-body">
                <div class="form-group">
                <label for="nombre" class="col-form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombre">
                </div>
                <div class="form-group">
                <label for="pais" class="col-form-label">Contraseña:</label>
                <input type="password" class="form-control" id="contraseña">
                </div>                
                <div class="form-group">
                <label for="edad" class="col-form-label">direccion:</label>
                <input type="text" class="form-control" id="direccion">
                </div>         
                <div class="form-group">
                <label for="correo" class="col-form-label">corre:</label>
                <input type="text" class="form-control" id="correo">
                </div>      
                <div class="form-group">
                <label for="movil" class="col-form-label">Movil:</label>
                <input type="number" class="form-control" id="movil">
                </div>   
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>  
      
    
    
</div>
<!--FIN del cont principal-->
// Incluye la parte inferior de la página
<?php require_once "vistas/parte_inferior.php"?>