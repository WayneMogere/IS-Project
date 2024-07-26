<?php
$host="localhost"
$user="root"
$password=""
$db="login_db"

$connect = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    echo "Failed to connect DB" .$conn->connect_error;
}
echo "Connected Successfully";
?>