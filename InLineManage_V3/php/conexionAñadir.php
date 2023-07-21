<?php
include 'conexion.php';

    $nombreProveedor=$_POST['nombre'];
    $direccionProveedor=$_POST['direccion'];


   $insertar = "insert into proveedor VALUES (null,'$nombreProveedor', '$direccionProveedor')";

   

   $resultado = $mysqliconnect->query("SELECT * FROM proveedor");
   $resultado = $mysqliconnect->query($insertar);

   if($resultado){
    echo "Datos agregados";
   }else{
    echo "Error al guardar los datos";
   }

   mysqli_close($mysqliconnect);
?>
