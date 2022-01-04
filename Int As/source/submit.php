<?php
// Include config file
require_once "config.php";

// Initialize the session
session_start();
 
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
$username = trim($_POST["username"]);
$password = trim($_POST["password"]);
$userid= $_SESSION['id'];
$datefrom=$_POST["datefrom"];
$dateto=$_POST["dateto"];
$reason= $_POST["reason"];
$status='pending';
        // Prepare an insert statement
        $sql = "INSERT INTO application (userid,datefrom, dateto,reason, status) VALUES (?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $userid, $datefrom, $dateto, $reason, $status);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
 /*               
$emailid = 'hnafpaktitis@gmail.com';
$to = "harry@skamnos.com"; // this is your Email address
$from = $emailid;  // this is the sender's Email address
$subject = "Intrested in scheduling appointment.";
$message = "<a href='http://www.google.com'>Click Here</a>" . $reason; 
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From:" . $from;
$retval = mail($to,$subject,$message,$headers);
                         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }

*/

$id = mysqli_insert_id($link);
$date = date('m/d/Y h:i:s a', time());

$to = "harry@skamnos.com";
         $subject = "Intrested in scheduling appointment.";
         $message .= '<div style="margin:0;font-weight:lighter;background:#f0f4f7;">
    <table class="m_6501530908114331344layout" style="font-family:Helvetica,Arial,sans-serif;background:#f0f4f7;width:100%">
      <tbody><tr>
        <td>
          <table cellspacing="0" class="m_6501530908114331344page-container" width="505" align="middle" style="font-family:Helvetica,Arial,sans-serif;border-spacing:0;background-color:#fff;max-width:505px!important;display:block!important;margin:25px auto!important;clear:both!important">
            <tbody><tr class="m_6501530908114331344header" style="background-color:rgba(218, 23, 23, 0.03);">
              <td class="m_6501530908114331344row" style="border-left:1px solid #e7e7e7;border-right:1px solid #e7e7e7;border:none;padding:20px 35px">
          <h2> Dear supervisor, employee ' . $_SESSION['username'] . ' requested for some time off, starting on ' . $datefrom . ' and ending on ' . $dateto . ', stating the reason:' . $reason . ' </h2>
              </td>
            </tr>
            <tr class="m_6501530908114331344subject" style="background-color:#fff">
              <td class="m_6501530908114331344primary-message" style="padding:20px 35px 0">
                  <p style="margin:20px 0;line-height:1.45"></p>



<h2 class="m_6501530908114331344centered" style="font-size:24px;font-weight:bold;margin:0;margin-bottom:30px;display:block;text-align:center;margin-bottom:0;color:#eb2028;">
   Click on one of the below links to approve or reject the application 
</h2>


<table class="m_6501530908114331344email-btn" style="font-family:Helvetica,Arial,sans-serif;background:#eb2028;padding:10px">
  <tbody><tr>
    <td>
 <a href="http://localhost:8888/linkprocess.php?id=' . $id . '&status=accepted&date=' . $date .'&email=' .$_SESSION["email"]. ' " style="text-decoration:none;color:#088df6;color:#fff;" target="_blank">Accept application</a>
    </td>
    <td>
    </td>
   <td>
 <a href="http://localhost:8888/linkprocess.php?id=' . $id . '&status=denied&date=' . $date .'&email=' .$_SESSION["email"]. ' " style="text-decoration:none;color:#088df6;color:#fff;" target="_blank">Deny application</a>
    </td>
  </tr>
</tbody>
</table>




                  <p style="margin:20px 0;line-height:1.45">
                    <strong style="font-weight:bold">

                    </strong>
                  </p>
              </td>
            </tr>
            <tr class="m_6501530908114331344footer" style="color:#7f8da0">
              <td class="m_6501530908114331344footer-tagline" style="padding:0 35px">
                <hr class="m_6501530908114331344footer-line-break" style="margin-bottom:35px;border:0;border-bottom:1px solid #d3dbe3">
                <p class="m_6501530908114331344small" style="font-size:12px">
                  <strong style="font-weight:bold">
                    <a style="color:#eb2028;" href="http://google.com"></a> -
                    
                  </strong>
                </p>
                  <p class="m_6501530908114331344small" style="font-size:12px">
                    <a href="mailto:#" style="text-decoration:none;color:#088df6;color:#7f8da0;text-decoration:underline" target="_blank"> </a>.
                  </p>
              </td>
            </tr>
            <tr class="m_6501530908114331344footer" style="color:#7f8da0">
              <td class="m_6501530908114331344footer-links" style="padding:20px 35px 45px">
                <p class="m_6501530908114331344small" style="font-size:12px">
                 
                </p>
              </td>
            </tr>
          </tbody></table>
        </td>
      </tr>
    </tbody></table>

<img src="" alt="" width="1" height="1" border="0" style="height:1px!important;width:1px!important;border-width:0!important;margin-top:0!important;margin-bottom:0!important;margin-right:0!important;margin-left:0!important;padding-top:0!important;padding-bottom:0!important;padding-right:0!important;padding-left:0!important" class="CToWUd"><div class="yj6qo"></div><div class="adL">
</div></div>';

         $header = "From:abc@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";

         $retval = mail ($to,$subject,$message,$header);

         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }





                
                // Redirect to login page
                header("location: welcome.php");
            
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
   
    <link rel="stylesheet" href="cal.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
       <!-- Must put our javascript files here to fast the page loading -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.js"></script>

</head>
<body>
    <div class="wrapper">
        <h2>Apply for Vacation Days</h2>
        <p>Please fill this form to apply for your vacation days.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            
            <br>
                        <label>Reason</label>
         <textarea name ="reason" rows = "5" cols = "60" name = "description">
            
         </textarea><br>
            
            <div class="form-group">
         <label>Dates</label>
                <div class="input-group input-daterange"> <input type="text" id="start" name= "datefrom" class="form-control text-left mr-2"> <label class="ml-3 form-control-placeholder" id="start-p" for="start">Start Date</label> <span class="fa fa-calendar" id="fa-1"></span> <input type="text" id="end" name="dateto" class="form-control text-left ml-2"> <label class="ml-3 form-control-placeholder" id="end-p" for="end">End Date</label> <span class="fa fa-calendar" id="fa-2"></span> 
                </div>
            
            
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>
        </form>
    </div>    
</body>
</html>

<script>
$(document).ready(function(){

$('.input-daterange').datepicker({
format: 'yyyy/mm/dd',
autoclose: true,
calendarWeeks : true,
clearBtn: true,
disableTouchKeyboard: true
});

});
</script>