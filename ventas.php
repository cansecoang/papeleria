<?php 

$heading = 'ventas';

require("functions.php");
?>

<?php require("views/partials/header.php") ?>
<?php require("views/partials/nav.php") ?>
<?php require("views/partials/real_header.php") ?>

  <main>

    <form action="insertar_venta.php" method="POST">
      <fieldset>
        <label for="fn_venta">ID venta: </label><input type="number" name="id_venta" id="id_venta">
        <br>
        <label for="fn_feyho">Fecha y hora: </label><input type="datetime" name="fecha_hora" id="fecha_hora">
        <br>
        <label for="fn_id_cliente">ID cliente: </label><input type="number" name="id_cliente" id="id_cliente">
        <br>
        <label for="fn_id_empleado">ID empleado: </label><input type="number" name="id_empleado" id="id_empleado">
        <br>
        <label for="fn_subtot">Subtotal: </label><input type="number" name="total_f" id="total_f">
        <br>
        <br>
        <input type="submit" value="registrar">
      </fieldset>
    </form>

  </main>


</body>
</html>
