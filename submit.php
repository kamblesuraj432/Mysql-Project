<?php

$name=$_POST["name"];
$email=$_POST["email"];
$website= $_POST["website"];
$comment=$_POST["comment"];
$gender=$_POST["gender"];


$servername = "mangal-db-1";  // Enter Mysql endpoint here
$username = "root";        // Enter Mysql user name here
$password = "suraj@123";  // Enter mysql Password here
$dbname = "suraj";       // Enter mysql database name here

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO user (name,email,website,comment,gender)VALUES('$name','$email','$website','$comment','$gender')";
if (mysqli_query($conn, $sql)) {
  echo "     New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
