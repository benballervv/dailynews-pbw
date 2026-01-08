<?php
date_default_timezone_set('Asia/Jakarta');

$servername = "sql100.infinityfree.com";
$username = "if0_40858365";
$password = ""; 
$db = "if0_40858365_webdailyjournal";

$conn = mysqli_connect($servername, $username, $password, $db);

if($conn->connect_error){
    die("connect failed : ". $conn->connect_error);
}
?>

