<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Notes";
$email=$_COOKIE["email"];
$title=$_REQUEST["title"];
$content=$_REQUEST["hcontent"];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO note(Email,Title,Content) VALUES ('$email', '$title','$content')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Registration successfully');window.location.href='login.html';</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>