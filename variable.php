<?php
//local variable and global variable
$x=5;
$y=7;
//function definion
function Myfunction (){
//lobal variable
$x=21;
$y=65;
echo "inside the function the value of x is $x and y is $y \n";
}
//function calling
Myfunction ();
echo "outside function the value of x is $x and y is $y ";
?>