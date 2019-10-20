<?php


         if(isset($_POST["submit"])){
            $id=$_POST["id"];
            $name=$_POST["name"];
            $email=$_POST["email"];
            $age=$_POST["age"];
            $pass=$_POST["pass"];
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

            $sql = "UPDATE users SET name='".$name."', email='".$email."', password='".$pass."' , age ='".$age."' WHERE id='".$id."'";

            if (mysqli_query($conn, $sql)) {//returns true or false
               echo "record Updated successfully";
               header("Location:get.php");
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
         }
        
    



?>