<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
        <h1>Login</h1>
        <form action="connect.php" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="email">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="password" required>
            <button type="submit">Log In</button>
        </form>
    </div>
</body>
</html>

