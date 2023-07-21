<?php
  include 'conexion.php';
    $idProveedor=$_POST['deleteidProveedor'];


    $buscar= "SELECT * from proveedor where idProveedor = '$idProveedor'";
    $resultado = $mysqliconnect->query($buscar);
    if($resultado->num_rows===0){
        echo "Error al encontrrar el proveedor con id '$idProveedor'";
    } else{
        
        $eliminar = "delete from proveedor where idProveedor='$idProveedor'";
        $resultado = $mysqliconnect->query($eliminar);
     
        if($resultado){
         echo "Datos eliminados correctamente";
        }else{
         echo "Error al eliminar los datos del proveedor con id $idProveedor";
        }
    
        mysqli_close($mysqliconnect);
    }

?>
