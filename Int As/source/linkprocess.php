<?php 

// Include config file
require_once "config.php";

echo $_GET['id'];
echo $_GET['status'];
echo $_GET['date'];
echo $_GET['email'];

$to .= 'harry@skamnos.com, ' . $_GET['email'] . '';
         $subject = "Intrested in scheduling appointment.";
         $message .= '<div style="margin:0;font-weight:lighter;background:#f0f4f7;">
    <table class="m_6501530908114331344layout" style="font-family:Helvetica,Arial,sans-serif;background:#f0f4f7;width:100%">
      <tbody><tr>
        <td>
          <table cellspacing="0" class="m_6501530908114331344page-container" width="505" align="middle" style="font-family:Helvetica,Arial,sans-serif;border-spacing:0;background-color:#fff;max-width:505px!important;display:block!important;margin:25px auto!important;clear:both!important">
            <tbody><tr class="m_6501530908114331344header" style="background-color:rgba(218, 23, 23, 0.03);">
              <td class="m_6501530908114331344row" style="border-left:1px solid #e7e7e7;border-right:1px solid #e7e7e7;border:none;padding:20px 35px">
          <h2> Dear employee, your supervisor has ' . $_GET['status'] . ' your application submitted on ' . $_GET['date'] . '  </h2>
              </td>
            </tr>
            <tr class="m_6501530908114331344subject" style="background-color:#fff">
              <td class="m_6501530908114331344primary-message" style="padding:20px 35px 0">
                  <p style="margin:20px 0;line-height:1.45"></p>



<h2 class="m_6501530908114331344centered" style="font-size:24px;font-weight:bold;margin:0;margin-bottom:30px;display:block;text-align:center;margin-bottom:0;color:#eb2028;">
</h2>

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


 $sql = "UPDATE application SET status=? WHERE id=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $_GET['status'], $_GET['id']);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                
                // Redirect to login page
                echo 'good';
            
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }




?>