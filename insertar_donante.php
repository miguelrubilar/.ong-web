<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];

$sql = "INSERT INTO DONANTE(nombre, email, direccion, telefono) 
VALUES ('$nombre', '$email', '$direccion', '$telefono')";

if($conn->query($sql)){
    echo "Donante registrado correctamente<br>";
} else {
    echo "Error: " . $conn->error;
}
?>
