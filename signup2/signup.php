<?php

if ($_SERVER['REQUEST_METHOD']=='POST'){
    include 'db.php';
    $studentid = $_POST['studentid'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql="Select * from `registration` where email='$email'";

    $result=mysqli_query($conn,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            echo "User already exist";
            header('location:signup.html');
            

        }else{
            $sql="INSERT INTO `registration`(`studentid`, `email`, `password`)
            VALUES('$studentid', '$email','$password')";
            $result=mysqli_query($conn,$sql);
            if($result){
                echo "Signup successfully";
                header('location:home.html');
            }
            else{
                die(mysqli_error($conn));
            }
        }
    }
}
?>