<?php
$a = 75;
$b = 25;
Function sum(){
    $GLOBALS['c']= $GLOBALS['a'] + $GLOBALS['b'];
}
sum();
echo $c;
?>