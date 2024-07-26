<?php
// db.php should contain the database connection code
include 'db.php';

// Fetch all items
$query = "SELECT * FROM lost_items";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lost and Found Report</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header style="padding-top: 0; padding: 10px;">
        <h1>Lost and Found - Personnel</h1>
        <nav class="menu">
            <ul>
                <li>
                    <a href="personnel_dashboard.php">Dashboard</a>
                </li>
                <li>
                    <a href="add_item.html">Add Item</a>
                </li>
                <li>
                    <a href="remove_item.html">Remove Item</a>
                </li>
            
                <li>
                    <a href="personnel_logout.php">Logout</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <h1>Lost and Found Report</h1>
            <table>
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Description</th>
                        <th>Date Reported</th>
                        <th>Date Claimed</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td style='padding:5px;'>" . htmlspecialchars($row['item_name']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['description']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['date_lost']) . "</td>";
                            if($row['date_claimed']){
                                echo "<td>" . htmlspecialchars($row['date_claimed']) . "</td>";
                                echo "<td>Claimed</td>";
                            }else{
                                echo "<td>Unclaimed</td>";
                                echo "<td>Not Claimed</td>";
                            }
                            echo "</tr>";
                        }
                    }else{
                        echo "<tr><td colspan='5'>No items found.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>