<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personnel Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header style="padding-top: 0; padding: 10px;">
        <h1>Lost and Found - Personnel</h1>
        <nav class="menu">
            <ul>
                <li>
                    <a href="add_item.html">Add Item</a>
                </li>
                <li>
                    <a href="remove_item.html">Remove Item</a>
                </li>
                <li>
                    <a href="personnel_report.php">Report</a>
                </li>
                <li>
                    <a href="personnel_logout.php">Logout</a>
                </li>
            </ul>
        </nav>
    </header>
    <br>
    <div class="container">
        
        <main>
            <h2>Dashboard</h2>
            <div id="lost-items">
                <?php include 'list_item.php'; ?>
            </div>
        </main>
        
    </div>
    <footer>
        <p>&copy; 2024 Lost and Found. All rights reserved.</p>
    </footer>
</body>
</html>
