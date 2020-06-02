<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "buatcrud";

$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn){
    die("koneksi error : ".mysqli_connect_error);
}
?>