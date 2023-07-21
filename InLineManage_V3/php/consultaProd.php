<?php
include 'conexion.php';

        $consultar = "select * from categoria where idCategoria";
        $resultado = mysqli_query($mysqliconnect, $consultar);


        if(isset($_POST['consultIdCategoria'])){
            $consultIdCategoria = $_POST['consultIdCategoria'];
        } else {
            $consultIdCategoria = 0; // O cualquier otro valor predeterminado
        }

        $consultar1 = "select * from existencia where idExistencia";
        $resultado1 = mysqli_query($mysqliconnect, $consultar1);


        if(isset($_POST['consultIdExistencia'])){
            $consultIdExistencia = $_POST['consultIdExistencia'];
        } else {
            $consultIdExistencia = 0; // O cualquier otro valor predeterminado
        }

        $consultar2 = "select * from proveedor where idProveedor";
        $resultado2 = mysqli_query($mysqliconnect, $consultar2);


        if(isset($_POST['idProveedor'])){
            $idProveedor = $_POST['idProveedor'];
        } else {
            $idProveedor = 0; // O cualquier otro valor predeterminado
        }

        $consultar3 = "select * from producto where idProducto";
        $resultado3 = mysqli_query($mysqliconnect, $consultar3);

        if(isset($_POST['idProducto'])){
            $idProducto = $_POST['idProducto'];
        } else {
            $idProducto = 0; // O cualquier otro valor predeterminado
        }

        $consultar4 = "select * from producto where idProducto";
        $resultado4 = mysqli_query($mysqliconnect, $consultar4);


        if(isset($_POST['idProducto'])){
            $idProducto = $_POST['idProducto'];
        } else {
            $idProducto = 0; // O cualquier otro valor predeterminado
        }


?>