<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location:home.html');
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
        <a href="logout.php">Logout</a>
    </div>
    
  </body>
</html>