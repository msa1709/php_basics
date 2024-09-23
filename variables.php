<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables in PHP</title>
</head>
<body>
    <h1> Variables in php </h1>
    <?php 
    $name ='Joe'; 
    ?>  
    <h2> Welcome to <?php echo $name; ?> 's Blog ! </h2>  

    <?php 
    //Destroying Variables 
    //unset($name);  
    //echo $name;
     
    $name ="Joes" ;
    $age =25; 
    //display the variable contents

    var_dump($name);
    var_dump($age); 




    ?>
</body>
</html>