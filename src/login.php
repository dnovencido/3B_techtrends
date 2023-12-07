<?php
    if(isset($_POST['submit'])) {
        echo "Hello " . $_POST['email'] . "!";
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        <h1>Login</h1>
        <form method="post">
            <input type="email" name="email" placeholder="Enter email" />
            <input type="password" name="password" placeholder="Enter password" />
            <input type="submit" value="Login" name="submit" />
        </form>
    </body>
</html>