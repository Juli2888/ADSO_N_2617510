<?php 
class conexion{	  
    // Método estático para establecer la conexión a la base de datos
    public static function Conectar() { 
        // Definir las constantes para los detalles de la conexión       
        define('servidor', 'localhost');
        define('nombre_bd', 'faproltex');
        define('usuario', 'root');
        define('password', '');			
        // Definir opciones para la conexión PDO		        
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');			
        try{
            // Intentar establecer la conexión PDO con la base de datos
            $conexion = new PDO("mysql:host=".servidor."; dbname=".nombre_bd, usuario, password, $opciones);			
            return $conexion; // Devolver la conexión establecida
        }catch (Exception $e){
            die("El error de Conexión es: ". $e->getMessage());  // En caso de error, imprimir el mensaje de error y terminar el script
        }
    }
}