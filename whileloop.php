<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops </title>
</head>
<body>
    <?php 
      $i=6; 
      while ($i<6) {
        echo $i;
        $i++; 

      }  

      $i=1;
      while ($i<6) {
        if ($i==3) break; 
        echo $i; 
        $i++; 
      }  

      $i=0; 
      while ($i<6) {
        $i++;
        if($i==3) continue; 
        echo $i; 
       
       }


    ?>
</body>
</html>