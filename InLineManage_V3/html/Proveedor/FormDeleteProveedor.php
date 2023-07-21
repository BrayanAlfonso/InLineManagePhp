<?php
include '../../php/consultaProd.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Bienvenidos/as</title>
  <link rel="stylesheet" type="text/css" href="../../css/styles.css">
  <link rel="stylesheet" href="../../css/registrosP.css">
</head>
<body>
  
  <header><img src="../../img/Icon.png" alt="Logo" class="logo">
    <h1>InLineManage | Proveedores</h1>
  </header>
  
  <div class="container">
    <form action="../../php/conexionEliminar.php" method="post">
    <h2>Eliminar Proveedor</h2><br>

    <label for="deleteidProveedor">Proveedor:</label>
    <select name="deleteidProveedor" id="deleteidProveedor">
      <option value="0" selected>Seleccione un proveedor</option>
    <?php
    
      while($rows=mysqli_fetch_assoc($resultado2)){
        echo '<option value="' . $rows ['idProveedor'] . '">' .$rows['nombreProveedor'] . '</option>';
    }
    ?>
      </select>

      <button type="submit">Eliminar</button>
    </form>
  </div>
  

  <?php
include '../asideFooterProveedor.php';
?>