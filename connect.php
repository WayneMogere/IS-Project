<?php
if($_SERVER['REQUEST_METHOD']== 'POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

$con=new mysqli('localhost', 'root', '', 'login_db');

if($con){
    //echo "Connection Successful";
    $sql="INSERT INTO users(name, email, password) VALUES('$name', '$email', '$password')";
    $result=mysqli_query($con, $sql);
    if($result){
        echo "Data inserted successfully";
    }else{
        die(mysqli_error($con));
    }
}else{
    die(mysqli_error($con));
}

}
?>