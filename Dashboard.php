<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <?php
    if(!isset($_COOKIE["email"])) 
    {
        echo "<script>alert('Kindly Login first');window.location.href='login.html'</script>";
    }

    ?>
    <div class="navbar">
        <span>Online Text Editor</span>
        <div class="navitems">
        <ul>
            <li class='list1'><a class="links" href="#">Home</a></li>
            <li class='list1'><a class="links" href="#">Login</a></li>
            <li class='list1'><a class="links" href="index.html">Create Note</a></li>
            <li class='list1'><a class="links" href="#">Logout</a></li>
        </ul>
        </div>
    </div>
    <div class="content">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Notes";
        
       
        $conn = new mysqli($servername, $username, $password, $dbname);
     
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        $cookie_name="email";
        $sql = "SELECT Title,NoteID FROM Note where Email=$_COOKIE[$cookie_name]";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            
          while($row = $result->fetch_assoc()) {
            
            echo "
            <form action='viewnote.php'>
            <div class='card'>
              <div class='container'>
                  <h4><b>".$row[Title]."</b></h4>
                  <input type='hidden' name='noteid' value=".$row["NoteID"]."/>
                </div>
            </div>
            </form>
          ";
          }
        } else {
          echo "<h4>You Haven't Created any Notes Yet </h4>";
        }
        $conn->close();

        ?>
    </div>
</body>
</html>