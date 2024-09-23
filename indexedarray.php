<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //Indexed Arrays  
    $cars = array("Volvo", "BMW", "Toyota");
    var_dump($cars);  
    //Accessed  Arrays 
    $cars = array("Volvo", "BMW", "Toyota");
    echo $cars[0]; 
    //Change the Value 
    $cars = array("Volvo", "BMW", "Toyota");
    $cars[1] = "Ford";
    var_dump($cars);  
    //Loop Through Indexed Array
    $cars = array("Volvo", "BMW", "Toyota");
   foreach ($cars as $x) {
       echo "$x <br>";
    }

    ?>
</body>
</html>