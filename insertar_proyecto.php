<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$presupuesto = $_POST['presupuesto'];

$sql = "INSERT INTO PROYECTO(nombre, presupuesto) 
VALUES ('$nombre', '$presupuesto')";

if($conn->query($sql)){
    echo "Proyecto agregado correctamente<br>";
} else {
    echo "Error: " . $conn->error;
}

echo "<a href='index.html'>Volver</a>";
?>
