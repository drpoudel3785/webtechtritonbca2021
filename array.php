<?php
//array initialization
//index array
$students = array("archana" , "babin" , "diwash" , "hem", "manish", "nishikar");
//printing the array data
echo $students[1];
echo $students[3];

echo "All Students Names <br/>";
//printing all students
for($i=0; $i< count($students); $i++)
{
    echo $students[$i]."<br/>";
}

echo "All Students Names by using foreach loop<br/>";
//printing all students
foreach($students as $names)
{
    echo $names ."<br/>";
}

//associative Array
$marks = array("english"=>100, "math"=>98, "science"=>90, "Nepali"=>80, "Population"=>90);

//print science marks
echo $marks['science'];
//print all marks with total and percentage
$total=0;
foreach($marks as $k=>$v)
{
    echo $k. " = " .$v ."<br/>";
    $total+=$v;
}
echo "The total marks is:  $total";
echo "The percentage is: ".$total/count($marks);

//if you want to go advanced then learn multidimension array

?>