<?php 
echo "<h3> Comparision Operators  </h3>"; 

//Equal 
$a =45; 
$b ="45";
var_dump($a==$b);  
echo "<br><br>";

//Identical 
$a = 45; 
$b = 45; 
var_dump($a===$b);  
echo "<br><br>"; 

//Not Equal 
$a=45; 
$b=35; 
var_dump($a!=$b); 
var_dump($a<>$b);  
echo "<br><br>"; 



//Not identical 
$a =45; 
$b= 45; 
var_dump($a!== $b);
echo "<br><br>";   

//less than 
$a =75; 
$b= 67; 
var_dump($a<$b);  
echo "<br><br>";  

//less than or equal to 
$a = 75; 
$b = 90; 
var_dump($a<=$b);   
echo "<br><br>";  
//greater than or greater than or equal to  
$a = 25; 

var_dump($a>18); 
var_dump($a>=18); 
echo "<br><br>";    

//spaceship operator <=> -1 0 1 
//if a value smaller b value greater -1 
// if b value greater a value smaller 1 
//if a and b both values are same 0  

$a=250;
$b=25 ;
var_dump($a<=>$b); 



?>