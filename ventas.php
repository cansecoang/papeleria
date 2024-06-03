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
        <label for="fn_feyho">Fecha y hora: </label><input type="datetime-local" name="fecha_hora" id="fecha_hora">
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

    <div>
      <h2>Lista de ventas</h2>

      <table>
        <tr>
          <th>ID</th>
          <th>Fecha y hora</th>
          <th>ID cliente</th>
          <th>ID empleado</th>
          <th>Total </th>

        </tr>

        <?php

          $conn = mysqli_connect("pape", "root", "", "papeleria_db");
      
          $sql = "SELECT * FROM ventas";
          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                    echo "<td>" . $row["id_venta"] . "</td>";
                    echo "<td>" . $row["fecha_hora"] . "</td>";
                    echo "<td>" . $row["id_cliente"] . "</td>";
                    echo "<td>" . $row["id_empleado"] . "</td>";
                    echo "<td>" . $row["total_f"] . "</td>";
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
