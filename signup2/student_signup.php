<?php

if ($_SERVER['REQUEST_METHOD']=='POST'){
    include 'db.php';
    $studentid = $_POST['studentid'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashedPassword = md5($password);

    $sql="Select * from `student` where email='$email'";

    $result=mysqli_query($conn,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            echo "User already exist";
            header('location:student_signup.html');
            

        }else{
            $sql="INSERT INTO `student`(`studentid`, `email`, `password`)
            VALUES('$studentid', '$email','$hashedPassword')";
            $result=mysqli_query($conn,$sql);
            if($result){
                echo "Signup successfully";
                header('location:student_dashboard.html');
            }
            else{
                die(mysqli_error($conn));
            }
        }
    }
}
?>