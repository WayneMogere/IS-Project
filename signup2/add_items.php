<?php
include 'db.php';
session_start();

if (!isset($_SESSION['personnel_username'])) {
    header("Location: personnel_login.html");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_name = $conn->real_escape_string($_POST['item_name']);
    $description = $conn->real_escape_string($_POST['description']);
    $date_lost = $conn->real_escape_string($_POST['date_lost']);
    
    $sql = "INSERT INTO lost_items (item_name, description, date_lost) VALUES ('$item_name', '$description', '$date_lost')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New lost item added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
