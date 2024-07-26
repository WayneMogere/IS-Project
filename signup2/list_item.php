<?php
include 'db.php';

$sql = "SELECT id, item_name, description, date_lost, date_claimed FROM lost_items";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='item'>";
        echo "<h3>" . $row["item_name"] . "</h3>";
        echo "<p>" . $row["description"] . "</p>";
        echo "<p>Date Reported: " . $row["date_lost"] . "</p>";
        if($row['date_claimed']){
            echo "<td> Date Claimed:" . htmlspecialchars($row['date_claimed']) . "</td>";
        }else{
            echo "<td>Unclaimed</td>";
        }
        echo "<p>id: " . $row["id"] . "</p>";
        echo "</div>";
    }
} else {
    echo "No lost items found.";
}
$conn->close();
?>
