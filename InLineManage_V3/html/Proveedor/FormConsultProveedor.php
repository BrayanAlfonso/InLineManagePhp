<?php
include '../../php/conexionConsultar.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Bienvenidos/as</title>
  <link rel="stylesheet" type="text/css" href="../../css/styles.css">
  <link rel="stylesheet" type="text/css" href="../../css/registrosP.css">
  <link rel="stylesheet" type="text/css" href="../../css/tablas.css">
</head>
<body>
  
  <header><img src="../../img/Icon.png" alt="Logo" class="logo">
    <h1>InLineManage | Proveedores</h1>
  </header>


<section class="seccion">
  <div class="container">
    <form action="FormConsultProveedor.php" method="POST">
    <h2>Consultar Proveedor</h2><br>
    <label for="consultProveedor">Digita el Id del Proveedor:</label>
    <select name="consultProveedor" id="consultProveedor">
      <option value="0" selected>Seleccione un id</option>
  <?php
  
    while($rows=mysqli_fetch_assoc($resultado)){
      echo '<option value="' . $rows ['idProveedor'] . '">' .$rows['nombreProveedor'] . '</option>';
  }
  ?>
    </select>

    <input type="submit" value="Consultar Proveedor" id="boton">
    </form>
  </div>

  <table class="tabla1">

<thead>
<tr>
  <th>Codigo</th>
  <th>Nombre</th>
  <th>Direccion</th>

 </tr>
</thead>
<tbody>

<?php if(mysqli_num_rows($resultado1) > 0): ?>
    <?php foreach($resultado1 as $key => $value): ?>
        <tr> 
            <td><?php echo $value["idProveedor"]; ?></td>
            <td><?php echo $value["nombreProveedor"]; ?></td>
            <td><?php echo $value["direccionProveedor"]; ?></td>
        </tr>
    <?php endforeach ?>
<?php else: ?>
    <tr>
        <td colspan="3">No se encontraron resultados</td>
    </tr>
<?php endif ?>

</tbody>
</table>


<?php
include '../asideFooterProveedor.php';
?>