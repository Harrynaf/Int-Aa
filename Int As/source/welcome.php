<?php

// Include config file
require_once "config.php";
 
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
 <?php
$sql="SELECT * FROM users WHERE id = '" . $_SESSION['id'] . "' ";
$result= mysqli_query($link,$sql);

               while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                  
                $_SESSION["fname"] = $row['firstname'];
                $_SESSION["lname"] = $row['lastname'];
                            $_SESSION["email"] = $row['email'];
               }
                            
 
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
        <a href="submit.php" class="btn btn-warning">Submit request</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
        
         <table>
            <tr>
                <td>Date From</td>
                <td>Date To</td>
                <td>Days requested</td>
                <td>Status</td>
                <td>Submited On</td>
            </tr>
            
             <?php
$sql="SELECT * FROM application WHERE userid = '" . $_SESSION['id'] . "' ";
$result= mysqli_query($link,$sql);

               while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {?>
                   <tr>
                   <td><?php echo $row['datefrom'];?></td>
                   <td><?php echo $row['dateto'];?></td>
                   <td><?php 
                  $datetime1 = strtotime($row['datefrom']);
                $datetime2 = strtotime($row['dateto']);
        $secs = $datetime2 - $datetime1;// == <seconds between the two times>
            $days = $secs / 86400;
                   echo $days;       
                  ?></td>
                   <td><?php echo $row['status'];?></td>
                   <td><?php echo $row['submited'];?></td>
                   </tr>
              <?php  } ?>
              </table>
    </p>
</body>
</html>
<?php
// Close connection
    mysqli_close($link);
    ?>