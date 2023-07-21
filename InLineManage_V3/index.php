<?php
include 'php/conexionConsultar.php';

?>
<?php
include 'html/plantillaHead1.php';
?>

  
  <header><img src="img/Icon.png" alt="Logo" class="logo">
    <h1>InLineManage | Proveedores</h1>
  </header>
    <h1 class="titulo">Proveedores registrados</h1>
<section class="seccion" >

  <table class="tabla2">

<thead>
<tr>
  <th>Codigo</th>
  <th>Nombre</th>
  <th>Direccion</th>

 </tr>
</thead>
<tbody>

<?php if(mysqli_num_rows($resultado) > 0): ?>
    <?php foreach($resultado as $key => $value): ?>
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


<aside>
  <div class="button-container">
  <a href="html/Producto/IndexProducto.php">
        <button class="button1">PRODUCTOS</button>
    </a><br>
    
    <a href="html/Proveedor/IndexProveedor.php">
        <button class="button1">PROVEEDORES</button>
    </a><br>

  </div>

</aside>
</section>
  <footer>Todos los Derechos Reservados InLineManage ©2023</footer>
</body>
</html>
