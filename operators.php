<?php 
//Arthimetic operator  

//Identity Operator
    $a="10"; 
    echo"<br>".gettype($a); 
    $a=+"10"; 
    echo"<br>".gettype($a);   
    
//Negation 
  $a=40; 
  echo "<br> A value:" .$a;  
  echo "<br> A value:".-$a;   

//Addition 
 $a =40;
 $b= 30;
 echo "<br> Total :".$a+$b;

//Subtraction  
$a =100;
$b= 40;
echo "<br> Total:" .$a-$b;  

//Multiplication 
echo "<br> Total:" .$a*$b;  

//Division 
echo "<br> Total:" .$a/$b;  

//Modulo 
echo "<br> Total: " .$a%$b;  

//Exponentiation 
$base =2;
$power =3; 
echo "<br> Exponentiation: ".$base**$power;


?>
