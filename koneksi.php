<?php
date_default_timezone_set('Asia/Jakarta');

$servername = "sql100.infinityfree.com";
$username = "if0_40858365";
$password = "7nDjyAsd6H"; 
$db = "if0_40858365_webdailyjournal"; // UPDATE SESUAI GAMBAR TERBARU

$conn = mysqli_connect($servername, $username, $password, $db);

if($conn->connect_error){
    die("connect failed : ". $conn->connect_error);
}
?>
