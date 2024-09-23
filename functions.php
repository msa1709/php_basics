<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    
    <?php 

    //Calling a function 
    /* function myMessage() {
        echo "Hello World!";  
     }  
     myMessage(); */

    //Function Arguments 
    /*  function familyname($fname) {
        echo "$fname is good.<br>";
     } 
     familyname("Aravind") ; 
     familyname("Krishna"); 
     familyname("Janani");*/ 

     //Default Argument Value 
     /*  function setHeight($minheight = 50) {
        echo "the height is : $minheight <br>"; 
     }  
     setHeight(350); 
     setHeight(); 
     setHeight(135); 
     setHeight(80); */ 

     //Returning Values 
    /*  function sum($x, $y) {
        $z= $x + $y;
        return $z; 
     }   
     echo sum(5,10). "<br>"; 
     echo sum(34,54). "<br>"; 
     echo sum(65,75)."<br>";*/  

     //Passing Arguments by Reference

       /* function add_five(&$value) {
        $value += 5;
      }
      
      $num = 2;
      add_five($num);
      echo $num; */  


    
       /* function sumMyNumbers(...$x) {
        $n = 0;
        $len = count($x);
        for($i = 0; $i < $len; $i++) {
          $n += $x[$i];
        }
        return $n;
      }
      
      $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
      echo $a; */  
    ?>


</body>
</html>