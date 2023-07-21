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
    <h1>InLineManage | Productos</h1>
  </header>
  
  <div class="container">
    <form action="../../php/eliminarProducto.php" method="post">
    <h2>Eliminar Producto</h2><br>

    <label for="deleteidProducto">Producto:</label>
    <select name="deleteidProducto" id="deleteidProducto">
      <option value="0" selected>Seleccione un producto</option>
    <?php
    
      while($rows=mysqli_fetch_assoc($resultado4)){
        echo '<option value="' . $rows ['idProducto'] . '">' .$rows['nombreProducto'] . '</option>';
    }
    ?>
      </select>

      <button type="submit">Eliminar</button>
    </form>
  </div>
  
  <?php
include '../asideFooter.php';
?>