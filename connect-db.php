<?php

$servername = "localhost";
$username = "ttt";
$password = "ttt";

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} mysqli_select_db($conn,'department');
//echo "connected";

?>
