<?php
include 'conexion.php';



    $idProveedor=$_POST['idProveedor'];
    $nombreProveedor=$_POST['ActNombre'];
    $direccionProveedor=$_POST['ActDireccion'];
    

    $buscar= "select * from proveedor where idProveedor = '$idProveedor'";
    $resultado = $mysqliconnect->query($buscar);
    if($resultado->num_rows===0){
        echo "Error al encontrrar el proveedor con id '$idProveedor'";
    } else{
        
        $actualizar = "update proveedor SET nombreProveedor='$nombreProveedor', direccionProveedor='$direccionProveedor' where idProveedor='$idProveedor'";
        $resultado = $mysqliconnect->query($actualizar);
     
        if($resultado){
         echo "Datos actualizados correctamente";
        }else{
         echo "Error al actualizar los datos del proveedor con id $idProveedor";
        }
    
        mysqli_close($mysqliconnect);
    }


?>
