<?php
session_start();
if(isset($_SESSION["users"]))
{
    echo "<h2>you're signed in!</h2>"."<br>";
    echo "to log out use ";
    echo "<a href='logout.php'>logout<br></a>";
    echo "to see all users in system";
    echo "<a href='get.php'>get data</a>";


}
else
{
    echo "<h2>you're not signed in!</h2>"."<br>";
    echo "to log in use ";
    echo "<a href='login.php'>log in<br></a>";
    echo "to sign up use ";
    echo "<a href='form.php'>sign up</a>";


}





?>
