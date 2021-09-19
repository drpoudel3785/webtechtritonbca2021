<?php
//session start
session_start();

//session create
//$_SESSION["name"]="Dharma";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mysite</title>
</head>
<body>
    <?php
    //include() include_once()  require()   require_once()
    include("inc_header.php");

    echo "My site body content will be written here";

    include("inc_footer.php");


    ?>


    
</body>
</html>