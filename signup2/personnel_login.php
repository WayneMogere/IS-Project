<?php
include 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = ($_POST['username']);
    $password = ($_POST['password']);
    $hashedPassword = md5($password);
    
    $sql = "SELECT id FROM personnel WHERE username = '$username' AND password = '$hashedPassword'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $_SESSION['personnel_username'] = $username;
        header("Location: personnel_dashboard.php");
    } else {
        header("location: personnel_login.html");
    }
}
$conn->close();
?>
