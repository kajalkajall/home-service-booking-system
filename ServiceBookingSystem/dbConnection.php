<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "homeservice_db";
$db_port = 3306;

// More verbose error handling
$conn = new mysqli($db_host, $db_user, $db_password, $db_name, $db_port);

if ($conn->connect_errno) {
    die("Failed to connect to MySQL: " . $conn->connect_error);
} else {
    // echo "Connected Successfully to database: " . $db_name;
}
?>