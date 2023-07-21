<?php
include '../../php/consultaProd.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Bienvenidos/as</title>
  <link rel="stylesheet" type="text/css" href="../../css/styles.css">
  <link rel="stylesheet" type="text/css" href="../../css/registrosProd.css">
</head>
<body>
  
  <header><img src="../../img/Icon.png" alt="Logo" class="logo">
    <h1>InLineManage | Productos</h1>
  </header>
  
  <div class="container">
    <form method="post" action="../../php/añadirProducto.php">
    <h2>Añadir Producto</h2><br>
      <label for="nombreProd">Nombre:</label>
      <input type="text" name="nombreProd" id="nombreProd" required>

      <label for="precio">Precio:</label>
      <input type="text" name="precio" id="precio" required>

      <label for="descripcion">Descripción:</label>
      <input type="text" name="descripcion" id="descripcion">


      <label for="consultIdCategoria">Categoria:</label>
    <select name="consultIdCategoria" id="consultIdCategoria">
      <option value="0" selected>Seleccione una categoria</option>
  <?php
  
    while($rows=mysqli_fetch_assoc($resultado)){
      echo '<option value="' . $rows ['idCategoria'] . '">' .$rows['nombreCategoria'] . '</option>';
  }
  ?>
    </select>


    <label for="consultIdExistencia">Existencia:</label>
    <select name="consultIdExistencia" id="consultIdExistencia">
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