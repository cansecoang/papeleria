<?php 

$heading = 'proveedores';

require("functions.php");
?>

<?php require("views/partials/header.php") ?>
<?php require("views/partials/nav.php") ?>
<?php require("views/partials/real_header.php") ?>

  <main>

    <form action="insertar_proveedor.php" method="POST">
      <fieldset>
        <label for="fn_proveedor">ID proveedor: </label><input type="number" name="id_proveedor" id="id_proveedor">
        <br>
        <label for="fn_nombre_proveedor">Nombre: </label><input type="text" name="nombre_proveedor" id="nombre_proveedor">
        <br>
        <label for="fn_telefono_proveedor">Teléfono: </label><input type="text" name="telefono_proveedor" id="telefono_proveedor">
        <br>
        <label for="fn_correo_proveedor">Correo: </label><input type="text" name="correo_proveedor" id="correo_proveedor">
        <br>
        <label for="fn_dire_prov">Dirección: </label><input type="date" name="direccion_proveedor" id="direccion_proveedor">
        <br>
        
        <br>
        <input type="submit" value="registrar">
      </fieldset>
    </form>

  </main>

