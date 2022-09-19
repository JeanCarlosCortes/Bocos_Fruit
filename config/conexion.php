<?php 
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'facturacion_inventario';
    $conection = @mysqli_connect($host,$user,$password,$db);
    if(!$conection){
        print "Error de conexion";
    }else{
        print "Conexion aceptada"
    }
?>