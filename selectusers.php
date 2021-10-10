<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select all users</title>
</head>
<body>
    <a href="insertusers.php">Add USers</a>
    <?php
      /*
        # sql statement
        # connection to db
        # query 
        # print data via loop
        #close the connection
      */
      $sql = "SELECT * FROM users";
    //$sql = "SELECT * FROM users WHERE role=1";
     // $sql = "SELECT * FROM users WHERE username='dharma' AND password='dharma'";


      require_once("dbconnection.php");
      $qry =  mysqli_query($conn, $sql) or die ("Unable to select users data");
      $count = mysqli_num_rows($qry);
      if($count>=1)
      {
          echo "<table border=1>";
          echo "<tr>";
          echo "<td>ID</td>";
          echo "<td>Username</td>";
          echo "<td>Password</td>";
          echo "<td>Email</td>";
          echo "<td>Role</td>";
          echo "<td>Status</td>";
          echo "<td>Action</td>";
          echo "</tr>";
            while($row=mysqli_fetch_array($qry))
            {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['username']."</td>";
                echo "<td>".$row['password']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['role']."</td>";
                echo "<td>".$row['status']."</td>";
                echo "<td>
                <a href=edit.php?uid=".$row['id'].">EDIT</a>
                <a href=delete.php?uid=".$row['id'].">Delete</a></td>";
                echo "</tr>";
            }
          echo "</table>";
          echo "There are $count records";
      }
      else{
          echo "No records found";
      }
      mysqli_close($conn);
    ?>
    
</body>
</html>