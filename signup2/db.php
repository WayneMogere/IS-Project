<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "is";
$conn = new mysqli($host, $user, $password, $dbname);

if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}