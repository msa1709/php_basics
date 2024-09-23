<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants</title>
</head>
<body>
    <?php 
     define("PROGRAM","PHP"); 
     define("VERSION", "8.2"); 
     define("NAMES", ["Ram", "sam", "Ravi"]);
     echo "Welcome to ".PROGRAM, " Version (".VERSION.")";  
     echo "<br> Name :".NAMES[0];
    ?>
</body>
</html>