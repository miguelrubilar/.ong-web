<?php
include("conexion.php");

$sql = "SELECT * FROM PROYECTO";
$result = $conn->query($sql);

echo "<h2>Lista de Proyectos</h2>";

while($row = $result->fetch_assoc()){
    echo "ID: ".$row["id_proyecto"]." - ";
    echo "Nombre: ".$row["nombre"]." - ";
    echo "Presupuesto: $".$row["presupuesto"]."<br>";
}
?>
