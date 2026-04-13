<?php
include("conexion.php");

$monto = $_POST['monto'];
$id_proyecto = $_POST['id_proyecto'];
$id_donante = $_POST['id_donante'];

$sql = "INSERT INTO DONACION(monto, fecha, id_proyecto, id_donante) 
VALUES ('$monto', CURDATE(), '$id_proyecto', '$id_donante')";

if($conn->query($sql)){
    echo "Donación registrada correctamente<br>";
} else {
    echo "Error: " . $conn->error;
}
?>
