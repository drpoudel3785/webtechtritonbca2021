<?php
$host = "localhost";
$dbusername ="root";
$dbpassword = "";
$dbname = "triton2021";

//connecting to mysql databases
$conn = mysqli_connect($host, $dbusername, $dbpassword, $dbname) or die("Unable to connect to dbatabase");
/*
if($conn)
{
    echo "Database Connect Success";
}
*/


?>