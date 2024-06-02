<?php 

$heading = 'clientes';

require("functions.php");
?>

<?php require("views/partials/header.php") ?>
<?php require("views/partials/nav.php") ?>
<?php require("views/partials/real_header.php") ?>

  <main>

    <form action="insertar.php" method="POST">
      <fieldset>
        <label for="fn_cliente">ID cliente: </label><input type="number" name="id_cliente" id="id_cliente">
        <br>
        <label for="fn_nombre">Nombre: </label><input type="text" name="nombre" id="nombre">
        <br>
        <label for="fn_apellido">Apellido: </label><input type="text" name="apellido" id="apellido">
        <br>
        <label for="fn_telefono">Teléfono: </label><input type="text" name="telefono" id="telefono">
        <br>
        <label for="fn_correo">Email: </label><input type="email" name="correo_cliente" id="correo_cliente">
        <br>
        <br>
        <input type="submit" value="registrar">
      </fieldset>
    </form>


    <div>
      <h2>Lista de clientes</h2>

      <table>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Apellido</th>
          <th>Telefono</th>
          <th>Correo electrónico</th>

        </tr>

        <?php

          $conn = mysqli_connect("pape", "root", "", "papeleria_db");
      
          $sql = "SELECT * FROM clientes";
          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                    echo "<td>" . $row["id_cliente"] . "</td>";
                    echo "<td>" . $row["nombre"] . "</td>";
                    echo "<td>" . $row["apellido"] . "</td>";
                    echo "<td>" . $row["telefono"] . "</td>";
                    echo "<td>" . $row["correo_cliente"] . "</td>";
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
