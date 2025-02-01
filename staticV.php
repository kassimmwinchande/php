<?php
//static variable use the keyword static
function Myfunction(){
    static $x=10;
    echo "variable x is $x\n";
    $x++;
}
Myfunction();
Myfunction();
?>
