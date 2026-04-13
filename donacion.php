<?php

if(isset($_POST["nombre"])){

    $nombre = $_POST["nombre"];
    $monto = $_POST["monto"];

    if($monto > 0){
        echo "Gracias por tu donación $nombre";
    } else {
        echo "Monto inválido";
    }
}
?>
