<?php 
echo "<h3> Logical Operators </h3>"; 
$eng = 98; 
$mat =88; 
$sci =79;  
var_dump($eng>=35 and $mat>=35 and $sci>=35); 
echo "<br><br>";  
var_dump($eng>=35 or $mat>=35 or $sci>=35);  
echo "<br><br>";  
var_dump(!$eng>=35);   
//xor operator  
$a =true; 
$b= true; 
var_dump($a xor $b);  

//Error Control Operator 
echo '<h3> Error Control operator  </h3>'; 

$b=20; 
$c=@$a+$b;
echo "Total: $c";    


//Execution operator 
echo '<h3> Execution Operator  </h3>'; 
echo `dir*.php`;

?>