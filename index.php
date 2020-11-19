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
    <?php
    if(!isset($_COOKIE["email"])) 
    {
        echo "<script>alert('Kindly Login first');window.location.href='login.html'</script>";
    }

    ?>

    
        <div class="text-area">
            <div class="button-area">
                <ul>
                    <li class="list"><button type="button"  onclick="boldtext()"><img src="images/bold.png" alt=""></button></li>
                    <li class="list"><button type="button"  onclick="italictext()"><img src="images/italic.png" alt=""></button></li>
                    <li class="list"><button type="button"  onclick="underlinetext()"><img src="images/underline.png" alt=""></button></li>
                    <li class="list"><button type="button" onclick="subscript()"><img src="images/subscript.png" alt=""></button></li>
                    <li class="list"><button type="button" onclick="superscript()"><img src="images/superscript.png" alt=""></button></li>
                    <li class="list"><button type="button" onclick="centertext()"><img src="images/center.png" alt=""></button></li>
                    <li class="list"><button type="button" onclick="lefttext()"><img src="images/left.png" alt=""></button></li>
                    <li class="list"><button type="button" onclick="righttext()"><img src="images/right.png" alt=""></button></li>
                    <li class="list">
                        
                        <span>FontName</span>
                        <select id="fonts" onchange="font()">
                            <option value="Arial">Arial</option>
                            <option value="Times New Roman">Times New Roman</option>
                            <option value="Courier New">Courier New</option>
                            <option value="Georgia">Georgia</option>
                          </select>
                    </li>
                    <li class="list">
                    
                        <span class="">FontSize</span>
                        <select id="fontsize" onchange="fontss()">
                            <option value=1>1</option>
                            <option value=2>2</option>
                            <option value=3>3</option>
                            <option value=4>4</option>
                            <option value=5>5</option>
                            <option value=6>6</option>
                            <option value=7>7</option>
                        </select>
                    </li>
                    <li class="list"><button type="button" onclick="contentprint()"><img src="images/print.png" alt=""></button></li>
                    <li class="list"><form action="savenote.php" method="POST"><input type="hidden" name="hcontent" value=""><input type="text" name="title" placeholder="title"><input type="submit" value="Save" onsubmit="save();"></form></li>
                </ul>
                
            </div>
            <div class="text" contenteditable="true" id="content"></div>
        </div>
   
</body>
</html>