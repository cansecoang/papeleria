<?php 

$conn = mysqli_connect("pape","root","","papeleria_db");

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);}

$id_cliente = $_POST['id_cliente'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$correo_cliente = $_POST['correo_cliente'];

$sql = "INSERT INTO clientes (id_cliente, nombre, apellido, telefono, correo_cliente) VALUES 
('$id_cliente', '$nombre', '$apellido', '$telefono', '$correo_cliente')";



if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();