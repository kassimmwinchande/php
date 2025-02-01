<?php
//declare variable with the given text
$text = "Learn PHP is my fun";

 //display the length of the string
 $length = strlen($text);
 echo "The Length of the string is $length\n";

 //convart the string to Upperclass
 $string = strtoupper($text);
 echo "The upperclass of the text is $string\n";

 //extract and display the world "PHP"using substr()
 $extractedWord = substr($text , 6,3);//extarct from index 9 with length 3
 echo "The extracted  word is $extractedWord\n";

 //Replace "fun" with "challengeing" and display the updated string
 $updatedText = str_replace("fun","challenging",$text);
 echo "The updated string is $updatedText";
 ?>


