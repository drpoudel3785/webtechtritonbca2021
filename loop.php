<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOOP</title>
</head>
<body>
<?php
$x = 1;
while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}
//displaying multiplication table by using loop and html table
$num = 10;
  echo "<table width=\"200px\" border=\"1\">";
    for($i=1; $i<=10; $i++)
    {
        echo "<tr>";
        echo "<td>";
        echo "$num x $i = " . $i*$num;
        echo "</td>";
        echo "</tr>";
    }
  echo "</table>";

  //Test the do while loop by yourself
?>

</body>
</html>