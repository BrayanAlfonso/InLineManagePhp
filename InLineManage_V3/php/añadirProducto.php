<?php
include 'conexion.php';

    $nombreProducto=$_POST['nombreProd'];
    $precioProducto=$_POST['precio'];
    $descripcion=$_POST['descripcion'];
    $idCategoria=$_POST['consultIdCategoria'];
    $idExistencia=$_POST['consultIdExistencia'];


   $insertar = "insert into producto VALUES (null,'$nombreProducto', '$precioProducto', '$descripcion', '$idCategoria', '$idExistencia')";

   

   $resultado = $mysqliconnect->query("SELECT * FROM producto");
   $resultado = $mysqliconnect->query($insertar);

   if($resultado){
    echo "Datos agregados";
   }else{
    echo "Error al guardar los datos";
   }

   mysqli_close($mysqliconnect);
?>