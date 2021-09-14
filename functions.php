<?php

function sayHello(){
    echo "Good Morning";
}

function add($a, $b){
    return $a+$b;
}

sayHello();
sayHello();
sayHello();
sayHello();
sayHello();
sayHello();

$total = add(34,45);
echo $total;
echo "<br>";

$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);
foreach($numbers as $n)
{
    echo $n. " ";
}


?>