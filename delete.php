<?php
if(isset($_GET['uid']))
{
    $uid=$_GET['uid'];
    /*
      # sql
      # connction
      # qry
      #close the connection
    */
    $sql = "DELETE FROM users WHERE id=$uid";
    include("dbconnection.php");
    $qry=mysqli_query($conn, $sql) or die("Unable to delte the record");
    if($qry)
    {
        echo "User deleted successfully";
        echo '<a href="selectusers.php">Go to Select Users</a>';
    }
}
else
{
    header("Location: selectusers.php");
}
?>