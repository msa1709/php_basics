<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop </title>
</head>
<body>
    <?php 
   /* for($x=0; $x<=10; $x++) {
        echo "The number is : $x <br>"; 
    }  */
 /*    for ($x=0; $x<=10; $x++){
        if ($x==3) break; 
        echo $x;
    }  */

    for ($x=0; $x<=10; $x++){
        if($x==3) continue; 
        echo $x;
    }  
    
    ?>
</body>
</html>