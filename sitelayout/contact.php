<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact </title>
</head>
<body>
    <?php
    //include() include_once()  required()   required_once()
    include("inc_header.php");
    echo "Welcome, ".$_SESSION["name"]."<br/>";

    echo "About us content content will be written here";

    include("inc_footer.php");


    ?>


    
</body>
</html>