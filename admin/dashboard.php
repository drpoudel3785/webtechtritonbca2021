<?php
include('inc_sessioncheck.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['user'];?></h1>
    <p><a href="logout.php">Logout</a></p>

    <hr/>
    <a href="selectusers.php">Users</a>
    <hr/>
</body>
</html>