<?php
//declare variable of different data types
$integer = 42;
$float = 32.42;
$string = "php";
$boolean =  "True/false";

//function to display the value and type of a variable
function displayType($variable,$name)
{
    echo "the value of $$name is $variable and its type is" .
    gettype($variable) . "\n";
}
 
//display the values and types
displayType($integer, 'integer');
displayType($float, 'float');
displayType($string, 'string');
displayType($boolean, 'boolean');
?>