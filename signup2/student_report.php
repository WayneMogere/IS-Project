<?php

include_once ('db.php');

$name = $_POST['name'];
$email = $_POST['email'];
$studentid = $_POST['studentid'];
$description = $_POST['description'];

$sql="INSERT INTO `report`(`name`, `email`, `studentid`, `description`)
    VALUES('$name', '$email','$studentid', '$description')";

$result=mysqli_query($conn,$sql);
if($result){
    echo'Thank you for your help';
    header('location:student_dashboard.html');
  }
else{
    die(mysqli_error($conn));
}

?>