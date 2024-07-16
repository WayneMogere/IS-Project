<?php
include 'db.php';
session_start();

if (!isset($_SESSION['personnel_username'])) {
    header("Location: personnel_login.html");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_id = $conn->real_escape_string($_POST['item_id']);
    
    $sql = "DELETE FROM lost_items WHERE id = '$item_id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Item removed successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
