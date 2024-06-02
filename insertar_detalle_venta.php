<?php 

$conn = mysqli_connect("pape","root","","papeleria_db");

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);}

$id_detalle = $_POST['id_detalle'];
$id_venta = $_POST['id_venta'];
$cantidad = $_POST['cantidad'];
$total_p = $_POST['total_p'];

$sql = "INSERT INTO clientes (id_detalle, id_venta, cantidad, total_p) VALUES 
('$id_detalle', '$id_venta', '$cantidad', '$total_p')";



if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>