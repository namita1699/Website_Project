<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
    <title>Text Editor</title>
</head>
<body>

    
        <div class="text-area">
            <div class="text" id="content">
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
                $sql = "SELECT Content FROM note where NoteID=$_REQUEST["noteid"]";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
     
          while($row = $result->fetch_assoc()) {
            echo $row["Content"];
          
          }
        }
        $conn->close();

        ?>
        </div>
        </div>
   
</body>
</html>