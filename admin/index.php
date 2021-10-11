<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<?php
if(isset($_POST['submit']))
{
    $username=trim($_POST['username']);
    $password=trim($_POST['password']);

    if(!empty($username) && !empty($password))
    {

        //sql for login check if that username and password is exist in the db or not
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' and status=1";
        //db connection
        include('dbconnection.php');
        //executing the query
        $qry =  mysqli_query($conn, $sql)or die(mysqli_error($conn));
        //counting the number of rows affected
        $count = mysqli_num_rows($qry);
        if($count==1)
        {
            while($row=mysqli_fetch_array($qry))
            {
                $_SESSION['role']=$row['role'];
                $_SESSION['email']=$row['email'];
                $_SESSION['user']=$row['username'];
                header("Location: dashboard.php");  
            }  
        }
        else{
            echo "login failed";
        }
    }
    else
    {
        echo "Username and password must not be empty";
    }
}

?>
    <form method="POST" name="login" action="<?php $_SERVER['PHP_SELF'];?>">
    <label>USername</label><br/>
    <input type="text" name="username" require >
   <br/> <label>Password</label><br/>
   <input type="password" name="password" require>
  <br/>
  <input type="checkbox" name="rememberme" value="1">Remember Me
  <br/>
  <input type="submit" name="submit" value="Login"/>

    </form>
</body>
</html>