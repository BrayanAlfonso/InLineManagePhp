
<?php
include '../../php/conexionConsultar.php';
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
    <form method="POST" action="../../php/conexionAñadir.php">
    <h2>Añadir Proveedor</h2><br>
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required>

      <label for="direccion">Dirección:</label>
      <input type="text" id="direccion" name="direccion" required>

      <input type="submit" value="Registrar Proveedor" id="boton">
    </form>
  </div>


  <?php
include '../asideFooterProveedor.php';
?>