<?php 
include 'conexion.php';

$idProducto = $_POST["idProducto"];
$nombreProducto = $_POST["nombreProducto"];
$precioProducto = $_POST["precioProducto"];
$descripcion = $_POST["descripcion"];
$idCategoria = $_POST["idCategoria"];
$idExistencia = $_POST["idExistencia"];

$actualizar = "update producto set nombreProducto='$nombreProducto', precioProducto='$precioProducto', descripcion='$descripcion', idCategoria='$idCategoria', idExistencia='$idExistencia' where idProducto='$idProducto'";
$resultado = $mysqliconnect->query($actualizar);

if ($resultado) {
    echo "Datos del producto actualizados";
} else {
    echo "Los datos no pudieron ser actualizados para el producto con ID $idProducto";
}

mysqli_close($mysqliconnect);

?>