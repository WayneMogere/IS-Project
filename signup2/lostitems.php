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
                    echo "<h2> Search Results: </h2>";
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