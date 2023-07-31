<?php
/* Local Database*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clinic_db";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$email = " rb@gmail.com";
$pass = "admin";

$sql = "SELECT * FROM admin WHERE loginid='" .$email . "' and password = '". $pass."'";
$result = mysqli_query($conn,$sql);
    $row  = mysqli_fetch_array($result);
	print_r($row); 
    /*$result = mysqli_query($conn,$sql);
   // $row  = mysqli_fetch_array($result);
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["loginid"]. " - Name: " . $row["fname"]. " " . $row["password"]. "<br>";
  }
	}
	*/



?> 