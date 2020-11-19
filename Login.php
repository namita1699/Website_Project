<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Notes";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT *  FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
        if($row["Email"]==$_REQUEST["email"] && $row["Pass"]==$_REQUEST["pass"])
        {
            setcookie("email",$row["Email"]);
            echo "<script>alert('login succeed');window.location.href='Dashboard.php'</script>";
        }
  }

}
$conn->close();
?>
