<?php

         if(isset($_POST["submit"])){
            $email=$_POST["email"];
            $pass =$_POST["pass"];
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "mydb";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            }
            $rs=mysqli_query($conn,"select * from users where email='$email' and password ='$pass'");
           	if(mysqli_num_rows($rs)<1)
           	{
           		$found="N";
              echo "Email or password is invalid. <br> click here to <a href='login.php'> try again";
           	}
           	else
           	{
                if(isset ($_POST["remember"])){
                  setcookie('email', $email, time()+60);
                  setcookie('pass', $pass, time()+60);
                } else {
                  $email = $_COOKIE['email'];
                  $pass = $_COOKIE['pass'];
                  setcookie('email', $email, time()-1);
                  setcookie('pass', $pass, time()-1);
                }
                session_start();
                $_SESSION["users"]=1;
                header("Location:sessions.php");
            }


            $conn->close();
         }




?>
