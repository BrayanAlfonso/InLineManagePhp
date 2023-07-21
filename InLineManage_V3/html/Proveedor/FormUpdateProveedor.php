<?php
include '../../php/consultaProd.php';
include '../plantillaHead1.php'
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
    <form action="../../php/conexionActualizar.php" method="POST">
    <h2>Actualizar Proveedor</h2><br>

    <label for="idProveedor">Proveedor:</label>
    <select name="idProveedor" id="idProveedor">
      <option value="0" selected>Seleccione un proveedor</option>
    <?php
    
      while($rows=mysqli_fetch_assoc($resultado2)){
        echo '<option value="' . $rows ['idProveedor'] . '">' .$rows['nombreProveedor'] . '</option>';
    }
    ?>
      </select>


      <label for="ActNombre">Nombre:</label>
      <input type="text" id="ActNombre" name="ActNombre" required>


      <label for="ActDireccion">Dirección:</label>
      <input type="text" id="ActDireccion" name="ActDireccion"  required>

      <input type="submit" value="Actualizar Proveedor" id="boton">
    </form>
  </div>

  <?php
include '../asideFooterProveedor.php';
?>