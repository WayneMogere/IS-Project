<?php
include 'db.php';

$sql = "SELECT id, item_name, description, date_lost FROM lost_items";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='item'>";
        echo "<h3>" . $row["item_name"] . "</h3>";
        echo "<p>" . $row["description"] . "</p>";
        echo "<p>Date Lost: " . $row["date_lost"] . "</p>";
        echo "</div>";
    }
} else {
    echo "No lost items found.";
}
$conn->close();
?>
