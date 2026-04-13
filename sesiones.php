<?php
session_start();

if(!isset($_SESSION['carrito'])){
    $_SESSION['carrito'] = [];
}

$_SESSION['carrito'][] = $_POST['monto'];

print_r($_SESSION['carrito']);
?>
