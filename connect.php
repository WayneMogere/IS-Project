<?php
$host="localhost"
$user="root"
$password=""
$db="ISProject"

$connect = new mysqli($host, $user, $password, $db);

if ($connect->connect_error) {
    echo "Failed to connect DB" .$conn->connect_error;
}
?>