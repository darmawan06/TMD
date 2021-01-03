<?php
// konfigurasi database
$host       =   "localhost";
$user       =   "root";
$password   =   "";
$database   =   "data_web";
error_reporting (E_ALL ^ E_NOTICE); 
// perintah php untuk akses ke database
$koneksi = mysqli_connect($host, $user, $password, $database);
?>
