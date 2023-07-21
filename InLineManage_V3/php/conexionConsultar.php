<?php
include 'conexion.php';



        $consultar = "select * from proveedor where idProveedor";
        $resultado = mysqli_query($mysqliconnect, $consultar);


        if(isset($_POST['consultProveedor'])){
            $consultIdproveedor = $_POST['consultProveedor'];
        } else {
            $consultIdproveedor = 0; // O cualquier otro valor predeterminado
        }

 
    

        $consultar1 = "select * from proveedor where idProveedor=$consultIdproveedor";
        $resultado1 = mysqli_query($mysqliconnect, $consultar1);




        $consultar2 = "select * from producto where idProducto";
        $resultado2 = mysqli_query($mysqliconnect, $consultar2);


        if(isset($_POST['consultProducto'])){
            $consultIdproducto = $_POST['consultProducto'];
        } else {
            $consultIdproducto = 0; // O cualquier otro valor predeterminado
        }

 
    

        $consultar3 = "select * from producto where idProducto=$consultIdproducto";
        $resultado3 = mysqli_query($mysqliconnect, $consultar3);


?>