<?php 

session_start();
$_SESSION['email'] = "ioocasancasnocasiocasi1234";
$_SESSION['username'] = "OcadoJKADSSJKNDSAJKDASHJKDASHJKDAS";
if(isset($_SESSION['email']) && !empty($_SESSION['email'])){
    require 'headers/customer-header.php'; 
}else{
    require 'headers/guest-header.php'; 
}

/* $_SESSION['darkmode'] = "enabled";
if(isset($_SESSION['darkmode']) && $_SESSION['darkmode'] == "enabled"){
    require 'css/style-darkmode.css'; 
} */
?>