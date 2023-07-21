<?php
include '../../php/consultaProd.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../../css/styles.css">
    <link rel="stylesheet" href="../../css/registrosP.css">
</head>
<body>
    
  <header><img src="../../img/Icon.png" alt="Logo" class="logo">
    <h1>InLineManage | Productos</h1>
  </header>

  <div class="container">
    <form action="../../php/actualizarProducto.php" method="POST">
        <h2>Actualizar datos de producto</h2>

        <label for="idProducto">Producto:</label>
        <select name="idProducto" id="idProducto">
            <option value="0" selected>Seleciona un producto</option>
            <?php
            
while ($rows=mysqli_fetch_assoc($resultado3)) {
    echo '<option value="'.$rows['idProducto'].'">'.$rows['nombreProducto'].'</option>';
}
            ?>
        </select>

        <label for="nombreProducto">Nombre:</label>
        <input type="text" id="nombreProducto" name="nombreProducto" required>

        <label for="precioProducto">Precio:</label>
        <input type="number" id="precioProducto" name="precioProducto" required>

        <label for="descripcion">Descripción:</label>
      <input type="text" name="descripcion" id="descripcion">


      <label for="idCategoria">Categoria:</label>
    <select name="idCategoria" id="idCategoria">
      <option value="0" selected>Seleccione una categoria</option>
  <?php
  
    while($rows=mysqli_fetch_assoc($resultado)){
      echo '<option value="' . $rows ['idCategoria'] . '">' .$rows['nombreCategoria'] . '</option>';
  }
  ?>
    </select>


    <label for="idExistencia">Existencia:</label>
    <select name="idExistencia" id="idExistencia">
      <option value="0" selected>Seleccione una existencia</option>
  <?php
  
    while($rows=mysqli_fetch_assoc($resultado1)){
      echo '<option value="' . $rows ['idExistencia'] . '">' .$rows['serial'] . '</option>';
  }
  ?>
    </select> <br>
    <button type="submit">Enviar</button>

    </form>
  </div>

  <?php
include '../asideFooter.php';
?>