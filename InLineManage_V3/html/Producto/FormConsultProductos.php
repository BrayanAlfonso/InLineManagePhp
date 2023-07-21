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
    <h1>InLineManage | Productos</h1>
  </header>


<section class="seccion">
  <div class="container">
    <form action="FormConsultProductos.php" method="POST">
    <h2>Consultar Producto</h2><br>
    <label for="consultProducto">Selecciona el Id del producto:</label>
    <select name="consultProducto" id="consultProducto">
      <option value="0" selected>Seleccione un id</option>
  <?php
  
    while($rows=mysqli_fetch_assoc($resultado2)){
      echo '<option value="' . $rows ['idProducto'] . '">' .$rows['nombreProducto'] . '</option>';
  }
  ?>
    </select>

    <input type="submit" value="Consultar Producto" id="boton">
    </form>
  </div>

  <table class="tabla1">

<thead>
<tr>
  <th>Codigo</th>
  <th>Nombre producto</th>
  <th>Precio Producto</th>
  <th>Descripcion</th>
  <th>Categoria</th>
  <th>Existencia No.</th>


 </tr>
</thead>
<tbody>

<?php if(mysqli_num_rows($resultado3) > 0): ?>
    <?php foreach($resultado3 as $key => $value): ?>
        <tr> 
            <td><?php echo $value["idProducto"]; ?></td>
            <td><?php echo $value["nombreProducto"]; ?></td>
            <td><?php echo $value["precioProducto"]; ?></td>
            <td><?php echo $value["descripcion"]; ?></td>
            <td><?php echo $value["idCategoria"]; ?></td>
            <td><?php echo $value["idExistencia"]; ?></td>
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
include '../asideFooter.php';
?>
