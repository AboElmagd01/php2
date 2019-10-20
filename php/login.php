<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            login
        </title>
    </head>
    <body>
        <form action="validate.php" method="post">
            <label for="email">email:</label>
            <br>
            <input type="email"id="email" name="email">
            <br>
            <label for="password">password:</label>
            <br>
            <input type="password" id="pass" name="pass">
            <br>
            <label for="remember">remember me</label>
            <input type="checkbox" name="remember" value="1">
            <br>
            <input type="submit" name="submit">
        </form>
    </body>
</html>
<?php
   if(isset($_COOKIE['email']) and isset($_COOKIE['pass'])){
     $email = $_COOKIE['email'];
     $pass = $_COOKIE['pass'];
     echo "<script>
           document.getElementById('email').value = '$email';
           document.getElementById('pass').value = '$pass';
           </script>";
   }










 ?>
