<?php
// Include config file
require_once "config.php";
   

if (!empty($_GET["username"]))
{$uname= $_GET["username"]; 

 
$sql='SELECT * FROM users WHERE username = "' . $uname . '" ';
$result= mysqli_query($link,$sql);

               while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                  
                $fname = $row['firstname'];
                $lname = $row['lastname'];
                $email = $row['email'];
                $type = $row['type'];
               }
}
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
$fname= $_POST["fname"];
$lname= $_POST["lname"];
$email= $_POST["email"];
$type= $_POST["type"];
$uname= $_POST['uname'];
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($password_err) && empty($confirm_password_err)){
        
         $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
        
        // Prepare an insert statement
        $sql = "UPDATE users SET firstname='" . $fname . "',password ='" . $param_password . "',lastname='" . $lname . "',email='" . $email . "',type='" . $type . "' WHERE username = '" . $uname . "' ";
         
        if($stmt = mysqli_prepare($link, $sql)){
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: admin.php");

            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update User<?php echo $_GET["username"]; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Update User <?php echo $uname; ?></h2>
        <p>Please fill this form to update a User.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">  
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>
             <div class="form-group">
                <label>First Name</label>
                <input type="text" name="fname" class="form-control" value="<?php echo $fname; ?>">
                <span class="invalid-feedback"></span>
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="lname" class="form-control" value="<?php echo $lname; ?>">
                <span class="invalid-feedback"></span>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
                <span class="invalid-feedback"></span>
            </div>
            <div class="form-group">
                <label>Type</label>
                           <select name="type" id="user" value="<?php echo $type; ?>">
  <option value="User">User</option>
    <option value="Admin">Admin</option>
            </select>
                <span class="invalid-feedback"></span>
            </div>
        <input type="hidden" id="custId" name="uname" value="<?php echo $uname; ?>">       
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Update">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>
        </form>
    </div>    
</body>
</html>