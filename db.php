<?php
$servername = "sql301.infinityfree.com	";
$username = "if0_37780975";
$password = "mUasQnOw4ef ";
$dbname = "if0_37780975_user_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>