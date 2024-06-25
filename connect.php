<?php
$con=new mysqli('localhost', 'root', '', 'login_db');

if($con){
    echo "Connection Successful";
}else{
    die(mysqli_error($con));
}

?>