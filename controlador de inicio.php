<?php
session_start();
if (empty($_SESSION['user']) and empty($_SESSION['clave'])) {
    header('location:Login.php');
}else{
header('location:Sistema_Principal.php');
}
?>