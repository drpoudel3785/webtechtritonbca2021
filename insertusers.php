<?php
//INSERT INTO table(c1,c2,...)
//VALUES (v1,v2,...);
// id, username, password, email, role, status

/* 
  #while working with database
  1. make the sql statement
  2. Make the connection
  3. query the db mysqli_query()
  for select only
  4. fetch the record 
  5. close the database connection

*/
if(isset($_POST['submit']))
{
    //capturing the forms data
    $usrname = $_POST['uname'];
    $usrpass = $_POST['upass'];
    $usremail = $_POST['uemail'];

$sql = "INSERT INTO users(username, password, email, role, status)
VALUES
('$usrname', '$usrpass', '$usremail', 2, 0)";

include_once('dbconnection.php');

$qry = mysqli_query($conn, $sql) or die ("Unable to insert the users");

if($qry)
{
    echo "User inserted successfully";
}

mysqli_close($conn);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    <form method="post" name="regUser" action="insertusers.php">
        <input type="text" name="uname" required><br/>
        <input type="password" name="upass" required><br/>
        <input type="email" name="uemail" required><br/>
        <input type="submit" name="submit" value="register"/>
    </form>
    
</body>
</html>