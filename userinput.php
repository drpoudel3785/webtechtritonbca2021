<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input</title>
</head>
<body>
<form method="POST" action="" name="userInput">
   <input type="number" name="mulnumber" required />
   <input type="submit" name="submit" value="Get Table"/>
</form>
<?php
//check the form is submitted or not
if(isset($_POST['submit']))
{
    //capture the forms input data
$num = $_POST['mulnumber'];
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
}
?>
</body>
</html>