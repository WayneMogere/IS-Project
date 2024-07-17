<?php
include_once('db.php');

//collect
if (isset($_POST['search'])){
    $searchq = $_POST['search'];
    $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
    $sql = mysql_query("SELECT * FROM report WHERE 'description' LIKE '%$searchq%'") or die("could not search");
    $count = mysql_num_rows($sql);
    if($count == 0){
        $output = 'There was no search results!';
    }else{
        while($row = mysql_fetch_array($sql)){
            $description = $row['description'];

            $output .= '<div>'.$description.'</div>';
        }
    }
}
?>



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
        <form style="" method="post" action="lostitems.php">
            <input type="text" name="search" placeholder="Search for item" required> 
            <button>Search</button>
        </form>
        <div class="container">
            <div id="lost-items">
                <?php include 'list_item.php'; ?>
            </div>
        </div>
    </main>
</body>
</html>