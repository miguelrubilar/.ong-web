<?php
include("conexion.php");

$sql = "SELECT p.nombre, COUNT(d.id_donacion) total, SUM(d.monto) suma
FROM PROYECTO p
JOIN DONACION d ON p.id_proyecto = d.id_proyecto
GROUP BY p.id_proyecto
HAVING COUNT(d.id_donacion) > 2";

$result = $conn->query($sql);

while($row = $result->fetch_assoc()){
    echo $row["nombre"]." ".$row["suma"]."<br>";
}
?>
