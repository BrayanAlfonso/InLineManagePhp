<?php
  include 'conexion.php';
    $idProducto=$_POST['deleteidProducto'];


    $buscar= "SELECT * from producto where idProducto = '$idProducto'";
    $resultado = $mysqliconnect->query($buscar);
    if($resultado->num_rows===0){
        echo "Error al encontrar el producto con id '$idProducto'";
    } else{
        
        $eliminar = "delete from producto where idProducto='$idProducto'";
        $resultado = $mysqliconnect->query($eliminar);
     
        if($resultado){
         echo "Datos eliminados correctamente";
        }else{
         echo "Error al eliminar los datos del producto con id $idProducto";
        }
    
        mysqli_close($mysqliconnect);
    }

?>