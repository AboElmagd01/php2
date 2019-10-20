<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            CMS
        </title>
    </head>
    <body>
        <form action="create.php" method="post">
            <label>Name:</label>
            <br>
            <input type="text" name="name">
            <br>
            <label>age:</label>
            <br>
            <input type="number" name="age">
            <br>
            <label>email:</label>
            <br>
            <input type="email" name="email">
            <br>
            <label>password:</label>
            <br>
            <input type="password" name="pass">
            <br>
            <input type="submit" name="submit">
        </form>
    </body>
</html>