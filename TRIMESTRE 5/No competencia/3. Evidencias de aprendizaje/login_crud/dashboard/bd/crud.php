<?php
// Incluir el archivo de conexión
include_once 'conexion.php';
// Crear una instancia del objeto de conexión
$objeto = new conexion();
$conexion = $objeto->Conectar();
// Recepción de los datos enviados mediante POST desde el JS   

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$contraseña = (isset($_POST['contraseña'])) ? password_hash($_POST['contraseña'], PASSWORD_DEFAULT) : '';
$direccion = (isset($_POST['direccion'])) ? $_POST['direccion'] : '';
$correo = (isset($_POST['correo'])) ? $_POST['correo'] : '';
$movil = (isset($_POST['movil'])) ? $_POST['movil'] : '';
// Log de información sobre el número de móvil recibido
error_log("Número de móvil recibido: " . $movil);
// Recepción de otras variables
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';
// Switch para determinar la opción seleccionada

switch($opcion){
    case 1: //alta insertar
        $consulta = "INSERT INTO clientes (nombre, contraseña, direccion,correo,movil) VALUES('$nombre', '$contraseña', '$direccion','$correo','$movil') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
 // Consulta para obtener el último cliente insertado
        $consulta = "SELECT id, nombre, contraseña, direccion, correo, movil FROM clientes ORDER BY id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2: //modificación
        $consulta = "UPDATE clientes SET nombre='$nombre', contraseña='$contraseña', direccion='$direccion',correo='$correo',movil='$movil' WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        // Consulta para obtener el cliente modificado
        $consulta = "SELECT id, nombre, contraseña, direccion, correo, movil FROM clientes WHERE id='$id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3://baja eliminar
        $consulta = "DELETE FROM clientes WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;        
}
print json_encode($data, JSON_UNESCAPED_UNICODE); //enviar el array final en formato json a JS
$conexion = NULL;
