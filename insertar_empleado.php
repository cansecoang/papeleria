<?php 

$conn = mysqli_connect("pape","root","","papeleria_db");

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);}

$id_proveedor = $_POST['id_proveedor'];
$nombre_proveedor = $_POST['nombre_proveedor'];
$telefono_proveedor = $_POST['telefono_proveedor'];
$correo_proveedor = $_POST['correo_proveedor'];
$direccion_proveedor = $_POST['direccion_proveedor'];


$sql = "INSERT INTO 
empleados (
    id_proveedor, 
    nombre_proveedor, 
    telefono_proveedor,
    correo_proveedor,
    direccion_proveedor) VALUES 
('$id_proveedor', '$nombre_proveedor', '$telefono_proveedor', '$correo_proveedor', '$direccion_proveedor')";



if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>