<?php
$mysqliconnect = mysqli_connect("localhost", "root", "", "InLineManage");
if ($mysqliconnect->connect_errno) {
    echo "Error al conectar la base de datos: " . $mysqliconnect->connect_error;
    exit();

    
} 

?>