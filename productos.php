<?php 

$heading = 'productos';

require("functions.php");
?>

<?php require("views/partials/header.php") ?>
<?php require("views/partials/nav.php") ?>
<?php require("views/partials/real_header.php") ?>

  <main>

    <form action="insertar_producto.php" method="POST">
      <fieldset>
        <label for="fn_pro">ID producto: </label><input type="number" name="id_producto" id="id_producto">
        <br>
        <label for="fn_nombre_prod">Nombre: </label><input type="text" name="nombre_producto" id="nombre_producto">
        <br>
        <label for="fn_desc">Descripción: </label><input type="text" name="descripcion" id="descripcion">
        <br>
        <label for="fn_precio">Precio: </label><input type="number" name="precio" id="precio">
        <br>
        <label for="fn_stock">Stock: </label><input type="number" name="stock" id="stock">
        <br>
        <label for="fn_id_prov">ID proveedor: </label><input type="number" name="id_proveedor" id="id_proveedor">
        <br>
        <label for="fn_id_cat">ID categoría: </label><input type="number" name="id_categoria" id="id_categoria">
        <br>
        
        <br>
        <input type="submit" value="registrar">
      </fieldset>
    </form>

  </main>

