<?php 

$conn = mysqli_connect("pape","root","","papeleria_db");

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);}

$id_venta = $_POST['id_venta'];
$fecha_hora = $_POST['fecha_hora'];
$id_cliente = $_POST['id_cliente'];
$id_empleado = $_POST['id_empleado'];
$total_f = $_POST['total_f'];

$sql = "INSERT INTO clientes (id_venta, fecha_hora, id_cliente, id_empleado, total_f) VALUES 
('$id_venta', '$fecha_hora', '$id_cliente', '$id_empleado', '$total_f')";



if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>