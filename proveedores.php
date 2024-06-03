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
        <label for="fn_dire_prov">Dirección: </label><input type="text" name="direccion_proveedor" id="direccion_proveedor">
        <br>
        
        <br>
        <input type="submit" value="registrar">
      </fieldset>
    </form>

    <div>
      <h2>Lista de proveedores</h2>

      <table>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Telefono</th>
          <th>Correo electrónico</th>
          <th>Dirección</th>

        </tr>

        <?php

          $conn = mysqli_connect("pape", "root", "", "papeleria_db");
      
          $sql = "SELECT * FROM proveedores";
          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                    echo "<td>" . $row["id_proveedor"] . "</td>";
                    echo "<td>" . $row["nombre_proveedor"] . "</td>";
                    echo "<td>" . $row["telefono_proveedor"] . "</td>";
                    echo "<td>" . $row["correo_proveedor"] . "</td>";
                    echo "<td>" . $row["direccion_proveedor"] . "</td>";
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

