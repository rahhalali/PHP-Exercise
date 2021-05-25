<?php
$palendrom=strtolower($_GET["pal"]);
    function Palindrome($palendrom){ 
        if (strrev($palendrom) == $palendrom){ 
            return true;
        }
        else{
        
            return false;
        }
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="palindrom.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form action="palindrom.php" method="GET">
    <input type="text" name="pal" placeholder="Enter a String" required />
    </form>
    </div>
</body>
</html>