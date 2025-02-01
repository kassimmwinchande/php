<?php
//initialize variable
$x = 5;
$y = 10;

//display the value before swapping
echo "before swapping: \n";
echo "x = $x , y = $y\n";
 //swapping variable without using third variable
  $x = $x + $y; //sum the value.
  $y = $x - $y; //substract the new Y frm the sum to get original x.
  $x = $x - $y; //substract the new Y from the sum to get original Y.
  
  //display variable
  echo "After swapping: \n";
  echo "x=$x , y=$y\n";
  ?>

