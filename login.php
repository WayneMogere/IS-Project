<?php
session_start();

// Define your hardcoded credentials (in a real scenario, these would be in a database)
$valid_username = "user";
$valid_password = "pass";

// Get the username and password from the POST request
$username = $_POST['username'];
$password = $_POST['password'];

// Validate credentials
if ($username === $valid_username && $password === $valid_password) {
    // Set session variables
    $_SESSION['username'] = $username;
    header('Location: welcome.php');
} else {
    // Redirect back to the login page with an error
    $error_message = "Invalid username or password";
    header('Location: login.html?error=' . urlencode($error_message));
}
exit();
?>
