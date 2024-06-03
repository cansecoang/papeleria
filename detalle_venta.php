<?php 

$heading = 'detalle de ventas';

require("functions.php");
?>

<?php require("views/partials/header.php") ?>
<?php require("views/partials/nav.php") ?>
<?php require("views/partials/real_header.php") ?>

  <main>

    <form action="insertar_detalle_venta.php" method="POST">
      <fieldset>
        <label for="fn_detalle">ID detalle: </label><input type="number" name="id_detalle" id="id_detalle">
        <br>
        <label for="fn_id_venta">ID venta</label><input type="number" name="id_venta" id="id_venta">
        <br>
        <label for="fn_id_producto">ID producto: </label><input type="number" name="id_producto" id="id_producto">
        <br>
        <label for="fn_cantidad">Cantidad: </label><input type="number" name="cantidad" id="cantidad">
        <br>
        <label for="fn_subtot">Subtotal: </label><input type="number" name="total_p" id="total_p">
        <br>
        <br>
        <input type="submit" value="registrar">
      </fieldset>
    </form>

    <div>
      <h2>Lista detalle de ventas</h2>

      <table>
        <tr>
          <th>ID</th>
          <th>ID venta</th>
          <th>ID producto</th>
          <th>Cantidad</th>
          <th>Subtotal </th>

        </tr>

        <?php

          $conn = mysqli_connect("pape", "root", "", "papeleria_db");
      
          $sql = "SELECT * FROM detalle_venta";
          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                    echo "<td>" . $row["id_detalle"] . "</td>";
                    echo "<td>" . $row["id_venta"] . "</td>";
                    echo "<td>" . $row["id_producto"] . "</td>";
                    echo "<td>" . $row["cantidad"] . "</td>";
                    echo "<td>" . $row["total_p"] . "</td>";
                  echo "</tr>";
              }
          } else {
              echo "0 resultados";
          }
      
          mysqli_close($conn);
        ?>

      </table>


    </div>

  </main>


</body>
</html>
