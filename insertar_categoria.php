<?php 

$conn = mysqli_connect("pape","root","","papeleria_db");

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);}

$id_categoria = $_POST['id_categoria'];
$nombre_categoria = $_POST['nombre_categoria'];
$descripcion_categoria = $_POST['descripcion_categoria'];

$sql = "INSERT INTO categorias (id_categoria, nombre_categoria, descripcion_categoria) VALUES 
('$id_categoria', '$nombre_categoria', '$descripcion_categoria')";



if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>