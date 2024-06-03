<?php 

$conn = mysqli_connect("pape","root","","papeleria_db");

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);}

$id_producto = $_POST['id_producto'];
$nombre_producto = $_POST['nombre_producto'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];
$id_proveedor = $_POST['id_proveedor'];
$id_categoria = $_POST['id_categoria'];


$sql = "INSERT INTO productos (id_producto, nombre_producto, descripcion, precio, stock,id_proveedor,id_categoria) VALUES 
('$id_producto', '$nombre_producto', '$descripcion', '$precio', '$stock','$id_proveedor','$id_categoria')";



if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>