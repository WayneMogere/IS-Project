<?php

include_once ('db.php');

$name = $_POST['name'];
$email = $_POST['email'];
$studentid = $_POST['studentid'];
$description = $_POST['description'];

$sql="Select * from `report` where description = '$description'";

$result=mysqli_query($conn,$sql);
if($result){
    $num=mysqli_num_rows($result);
    if($num>0){
        echo "Item already reported. <a style='color: black;' href='student_report.html'>Go Back</a>";
        

    }else{
        $sql="INSERT INTO `report`(`name`, `email`, `studentid`, `description`)
        VALUES('$name', '$email','$studentid', '$description')";
        $result=mysqli_query($conn,$sql);
        if($result){
            echo "Thank you for your help. <a style='color: black;' href='student_report.html'>Go Back</a>";
        }
        else{
            die(mysqli_error($conn));
        }
    }
}
?>