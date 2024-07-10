<?php
//connect to our database (our database credentials)
$host = "localhost";
$user = "root";
$password = "";
$dbname = "signupforms2";
$conn = new mysqli($host, $user, $password, $dbname);

if($conn->connect_error){
    //stop execustion
    die('Connection Failed : '.$conn->connect_error);
}