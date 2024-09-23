<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datatype in PHP </title>
</head>
<body>
    <?php 
    //Boolean 
    $is_married =true ;
    var_dump($is_married);
    echo "<br>"; 

    //Integer 
    $age = 15; 
    var_dump($age); 
    echo "<br>"; 

    //Floating Point 
    $temp = 98.6; 
    var_dump($temp); 
    echo "<br>";  

    //string 
    $name = 'joes'; 
    var_dump($name); 
    echo "<br>"; 

    //null 
    $data = null; 
    var_dump($data); 
    echo "<br>";
    // 698, in scientific notation
    $c = 6.9E+2;
    var_dump($c);
    echo "<br>";
    echo "<br>";
    echo "Integer Max Value: ".PHP_INT_MAX;
    echo "<br>";

    // define floating-point variable
   $speed = 501.789;
   echo $speed;
    echo "<br>";
// cast to integer
  $newSpeed = (integer) $speed;
  echo $newSpeed; 
  echo "<br>"; 
     $data = 2.5; 
     echo "is_String : ".is_string($data); 
     $data="int";
     echo "<br>";
     echo gettype($data);

    ?>

</body>
</html>