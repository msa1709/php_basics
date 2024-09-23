<?php 
//String Operator 
//concatenation Operator('.')
//concatenating Assignment Operator ('.=')  

$a ="Hello";
$b= $a. "World!";  
echo $b; 
echo "<br>"; 
$a.="World!"; //$a =$a."World!"; 
echo $a;  

//{} Curly Brackets   

$word ="Aravind";
echo "<h1> The water is asked by </h1>";   
echo "<h1> The water is asked by " .$word. " for drinking</h1>";   
echo "<h1> The water is asked by {$word} for drinking</h1>";  
echo '<p>Joes once said: "I\'ll be back"</p>';
echo "<p>Joes once said: \"I'll be back\"</p>";

echo "M ".
$test="Aravind";  

// Outputs: Variables $a=25 $b=35
echo "<p>Variables $a=25 $b=35</p>";
echo '<p>Variables $a=25 $b=35</p>';
$a=50;
echo "<p> Value in $a </p>";
//echo "<p> Value in $as </p>";
echo "<p> Value in {$a}s </p>";

$person ["name" => "Alice"];
echo "<p>{$person['name']}</p>";
?>