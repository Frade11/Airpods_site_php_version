<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop";

$conn = new mysqli($servername,$username,$password,$dbname);

if($con->connect_error){
    die("Conextion failed: " . $conn->connect_error);
}
?>