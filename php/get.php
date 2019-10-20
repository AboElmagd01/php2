<?php
session_start();
if(!isset($_SESSION["users"]))
{
header("Location:sessions.php");
}
$con = mysqli_connect("localhost", "root", "", "mydb");//connect to the database

// Create a query for the database there are other impelementations in comments
//$query = "SELECT id,name, age, email, password FROM users";
$query = "SELECT * FROM users";
//$query = "SELECT * FROM users WHERE name = 'reemo'";
$res=mysqli_query($con, $query);
// If the query executed properly proceed
if($res){

echo '<table>

<tr><td align="left"><b>id</b></td>
<td align="left"><b>name</b></td>
<td align="left"><b>Age</b></td>
<td align="left"><b>Email</b></td>
<td align="left"><b>Pass</b></td>
<td align="left"><b>Update</b></td>
<td align="left"><b>Delete</b></td>
</tr>';

// mysqli_fetch_array will return a row of data from the query
// until no further data is available
while($row = mysqli_fetch_array($res)){

echo '<tr><td align="left">' .
$row['id'] . '</td><td align="left">' .
$row['name'] . '</td><td align="left">' .
$row['age'] . '</td><td align="left">' .
$row['email'] . '</td><td align="left">' .
$row['password'] . '</td><td align="left"><a href="updateform.php?id='
.$row['id'].'"> update </a></td><td align="left"><a href="delete.php?id='
.$row['id'].'"> Delete </a></td>';


echo '</tr>';
}

echo '</table>';

} else {

echo "Couldn't issue database query<br />";


}

// Close connection to the database
mysqli_close($con);

?>
