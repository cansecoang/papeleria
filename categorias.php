<?php 

$heading = 'categorias';

require("functions.php");
?>

<?php require("views/partials/header.php") ?>
<?php require("views/partials/nav.php") ?>
<?php require("views/partials/real_header.php") ?>

  <main>
  
    <form action="insertar_categoria.php" method="POST">
      <fieldset>
        <label for="fn_cat">ID categoria: </label><input type="number" name="id_categoria" id="id_categoria">
        <br>
        <label for="fn_nombre_cat">Nombre: </label><input type="text" name="nombre_categoria" id="nombre_categoria">
        <br>
        <label for="fn_desc_cat">Descripción: </label><input type="text" name="descripcion_categoria" id="descripcion_categoria">
        <br>
      
        <input type="submit" value="registrar">
      </fieldset>
    </form>

  </main>

