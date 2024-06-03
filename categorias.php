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

    <div>
      <h2>Lista de categorias</h2>

      <table>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Descripción</th>

        </tr>

        <?php

          $conn = mysqli_connect("pape", "root", "", "papeleria_db");
      
          $sql = "SELECT * FROM categorias";
          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                    echo "<td>" . $row["id_categoria"] . "</td>";
                    echo "<td>" . $row["nombre_categoria"] . "</td>";
                    echo "<td>" . $row["descripcion_categoria"] . "</td>";
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

