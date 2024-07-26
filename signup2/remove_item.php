<?php
include 'db.php';
session_start();



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_id = $conn->real_escape_string($_POST['item_id']);
    $date = $_POST['date'];
    
    $sql = "UPDATE lost_items SET date_claimed = '$date' WHERE  id = '$item_id'";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: personnel_dashboard.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
if (!isset($_SESSION['personnel_username'])) {
    header("Location: personnel_dashboard.php");
    exit;
}
$conn->close();
?>
