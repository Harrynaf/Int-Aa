<?php

// Include config file
require_once "config.php";
 
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
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
        <a href="create.php" class="btn btn-warning">Create User</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
        
         <table>
            <tr>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Email</td>
                <td>Type</td>
            </tr>
            
             <?php
$sql="SELECT * FROM users";
$result= mysqli_query($link,$sql);

               while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {?>
                   <tr>
                   <td>
                   <a href="properties.php?username=<?php echo $row['username']?>"><?php echo $row['firstname'];?></a>                
                   </td>
                   <td>
                   <a href="properties.php?username=<?php echo $row['username']?>"><?php echo $row['lastname'];?></td>
                   <td>
                   <a href="properties.php?username=<?php echo $row['username']?>"><?php echo $row['email'];?></td>
                   <td>
                   <a href="properties.php?username=<?php echo $row['username']?>"><?php echo $row['type'];?></td>
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