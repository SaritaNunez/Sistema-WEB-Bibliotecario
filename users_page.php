<?php
session_start();
if(!$_SESSION['logged']){
    header("Location: imprimir.php");
    exit;
}
echo 'Bienvenido, '.$_SESSION['username'];
?>
