<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Notes";
$email=$_REQUEST["email"];
$pass=$_REQUEST["pass"];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO user(Email,Pass) VALUES ('$email', '$pass')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Registration successfully');window.location.href='login.html';</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>