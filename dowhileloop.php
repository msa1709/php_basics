<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoWhile Loop </title>
</head>
<body>
    <?php
  /*  $i =1; 
    do {
        echo $i; 
        $i++; 

    }while ($i<6);  */
   //In a do...while loop the condition is tested AFTER executing the statements within the loop. This means that 
   //the do...while loop will execute its statements at least once, even if the condition is false. 

    $i=8; 
    do{
        echo $i; 
        $i++; 

    }while( $i<6);  

    //As you can see, the code is executed once, even if the condition is never true.  

    $i = 1;

do {
  if ($i == 3) break;
  echo $i;
  $i++;
} while ($i < 6);

$i = 0;

do {
  $i++;
  if ($i == 3) continue;
  echo $i;
} while ($i < 6);

    ?>
</body>
</html>