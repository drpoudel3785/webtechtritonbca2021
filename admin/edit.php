<?php
include('inc_sessioncheck.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT DATA</title>
</head>
<body>

<?php
//if update button is pressed in edit data
if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $uname=$_POST['username'];
    $upass=$_POST['password'];
    $uemail=$_POST['email'];
    $urole=$_POST['role'];
    $ustatus=$_POST['status'];

    //SQL for updating the data
    $sql = "UPDATE users SET username='$uname', password='$upass', email='$uemail', role='$urole', status='$ustatus' WHERE id=$id";

    //db connection
    include('dbconnection.php');

    //making query
    $qry = mysqli_query($conn, $sql) or die("Error while updating the user");

    if($qry)
    {
        header('Location: selectusers.php');
    }
}

?>
    <?php
    if(isset($_GET['uid']))
    {
        $eid = $_GET['uid'];
        //sql statement
        $sql  = "SELECT * FROM users WHERE id = $eid";
        //making connection
        include('dbconnection.php');
        //making query
        $qry = mysqli_query($conn, $sql) or die ("Something error");

        //getting the data
        while($row = mysqli_fetch_array($qry))
        {
            $uid = $row['id'];
            $username = $row['username'];
            $password = $row['password'];
            $email = $row['email'];
            $role = $row['role'];
            $status = $row['status'];

            echo "<form method='post' action='' name='editUser'>";
            echo "<label>Username</label><br/>";
            echo "<input type='hidden' name='id' value='$uid'>";
            echo "<input type='text' name='username' value='$username'/>";
            echo "<br/><label>Password</label><br/>";
            echo "<input type='text' name='password' value='$password'/>";
            echo "<br/><label>Email</label><br/>";
            echo "<input type='text' name='email' value='$email'/>";
            echo "<br/><label>Role</label><br/>";
            echo "<input type='number' name='role' value='$role'/>";
            echo "<br/><label>Status</label><br/>";
            echo "<input type='text' name='status' value='$status'/>";
            echo "<br/>";
            echo "<input type=\"submit\" name='submit' value='Update'>";
            echo "</form>";
        }

    }
    else
    {
        header('Location:selectusers.php');
    }
    ?>
    
</body>
</html>