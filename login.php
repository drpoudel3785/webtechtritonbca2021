<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Login</title>
</head>
<body>
    


<?php
/*
    # Checck the username and password is empty or not
    # Check password is greater the 6 character or not
    # username=admin and password=admin123 - say Credential Match otherwise say Wrong Username and Password
*/

if(isset($_POST["loginProcess"]))
{
    //capturing the data from form
$username = $_POST["username"];
$password =$_POST["password"];
//strlen returns the length of the string
$length=strlen($password);
if(empty($username) && empty($password))
{
    echo "Username and password must not be empty";
}
else{
    if($length<=5)
    {
    echo "Password must be greater than 6 char";
    }
     else
        {
            if($username=="admin" && $password=="admin123")
            {
                echo "Credential Match";
            }
            else{
                echo "Wrong Username and Password";
                }
        }
    }
}
?>

<form name="frmLogin" method="post" action="login.php">
    <input type="text" name="username" placeholder="Username" require/>
    <input type="password" name="password" placeholder="Password" require/>
    <input type="submit" name="loginProcess" value="Login" />

</form>
</body>
</html>

