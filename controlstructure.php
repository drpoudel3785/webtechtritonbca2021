<?php
$x = 5985;
//find the data types
echo gettype($x);
//returns datatypes and its values
var_dump($x);
var_dump(is_int($x));
//constant
define("GREETING", "Welcome to php.net!");
echo GREETING;
$name ="Dharma Raj POudel";
$msg ="Hello, ";
$msg.= "$name";
$msg.= GREETING;

echo "<h1>$msg</h1>";
$num1= 6;
$num2 ="6";
echo "<br/>";

if($num1===$num2)
{ echo "is Equal";}
else{
    echo "Not Equal";
}
?>