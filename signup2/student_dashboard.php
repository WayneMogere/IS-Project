<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location:student_dashboard.html');
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <title>Welcome page</title>
  </head>
  <body>
    <h1>Welcome</h1>

    <div>
        <a href="student_logout.php">Logout</a>
    </div>
    
  </body>
</html>