



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lost items</title>
</head>
<body>
    <header>
        <a href="student_dashboard.html">
            <img style="max-width: 40px; border-radius: 50%;" src="images/back.jpg" alt="">
        </a>
        <nav class="menu">
            <ul>
                <li>
                    <a href="student_report.html">Report Item</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <form style="" method="post" action="lostitems1.php">
            <input type="text" name="search" placeholder="Search for item" required> 
            <button>Search</button>
        </form>

        <?php
        include_once('db.php');

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $search = $conn->real_escape_string($_POST['search']);
            
            $sql = "SELECT id, item_name, description, date_lost FROM lost_items WHERE item_name LIKE '%$search%' OR description LIKE '%$search%'";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div style='margin-left: 410px;' class='item'>";
                    echo "<div><a style='color: black; padding-left: 250px;' href='lostitems1.php'>Cancel Search</a></div>";
                    echo "<h3>" . $row["item_name"] . "</h3>";
                    echo "<p>" . $row["description"] . "</p>";
                    echo "<p>Date Lost: " . $row["date_lost"] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "No items matched your search.<a style='color: black;' href='lostitems1.php'>OK</a>" ;
            }
        }
        ?>

        <div class="container">
            <h2>Lost Items:</h2>
            <div id="lost-items">
                <?php include 'list_item.php'; ?>
            </div>
        </div>
    </main>
</body>
</html>