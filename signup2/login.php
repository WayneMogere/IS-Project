<?php

if ($_SERVER['REQUEST_METHOD']=='POST'){
    include 'db.php';
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql="Select * from `registration` where email='$email' and password='$password'";

    $result=mysqli_query($conn,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            echo "login successfully";
            session_start();
            $_SESSION['email']=$email;
            header('location:home.html');
        }else{
            echo "Wrong Credentials";
            header('location:login.html');
        }
    }
}
?>

