<?php 

$heading = 'empleados';

require("functions.php");
?>

<?php require("views/partials/header.php") ?>
<?php require("views/partials/nav.php") ?>
<?php require("views/partials/real_header.php") ?>

  <main>

    <form action="insertar_empleado.php" method="POST">
      <fieldset>
        <label for="fn_empleado">ID empleado: </label><input type="number" name="id_empleado" id="id_empleado">
        <br>
        <label for="fn_nombre_empleado">Nombre: </label><input type="text" name="nombre_empleado" id="nombre_empleado">
        <br>
        <label for="fn_apaterno">Apellido Paterno: </label><input type="text" name="apaterno_empleado" id="apaterno_empleado">
        <br>
        <label for="fn_amaterno">Apellido Materno: </label><input type="text" name="amaterno_empleado" id="amaterno_empleado">
        <br>
        <label for="fn_correo_empleado">Email: </label><input type="email" name="correo_empleado" id="correo_empleado">
        <br>
        <label for="fn_telefono_empleado">Teléfono: </label><input type="text" name="telefono_empleado" id="telefono_empleado">
        <br>
        <label for="fn_puesto_empleado">Puesto: </label><input type="text" name="puesto" id="puesto">
        <br>
        <label for="fn_date_empleado">Fecha de contratación: </label><input type="date" name="fecha_contratacion" id="fecha_contratacion">
        <br>
        
        <br>
        <input type="submit" value="registrar">
      </fieldset>
    </form>

    <div>
      <h2>Lista de empleados</h2>

      <table>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Apellido Paterno</th>
          <th>Apellido Materno</th>
          <th>Correo electrónico</th>
          <th>Telefono</th>
          <th>Puesto</th>
          <th>Fecha de contratacion</th>

        </tr>

        <?php

          $conn = mysqli_connect("pape", "root", "", "papeleria_db");
      
          $sql = "SELECT * FROM empleados";
          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                    echo "<td>" . $row["id_empleado"] . "</td>";
                    echo "<td>" . $row["nombre_empleado"] . "</td>";
                    echo "<td>" . $row["apaterno_empleado"] . "</td>";
                    echo "<td>" . $row["amaterno_empleado"] . "</td>";
                    echo "<td>" . $row["correo_empleado"] . "empleado</td>";
                    echo "<td>" . $row["telefono_empleado"] . "</td>";
                    echo "<td>" . $row["puesto"] . "</td>";
                    echo "<td>" . $row["fecha_contratacion"] . "</td>";
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

