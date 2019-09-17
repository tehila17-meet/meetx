<?php
    if(isset($_POST['submit']))
    {
        
        $name = $_POST['form-name']; // Get Name value from HTML Form
        $email_id = $_POST['form-email']; // Get Email Value
        $msg = $_POST['form-message']; // Get Message Value
         
        
        $recipients = array(
            "tehilapelled16@gmail.com",
            "dor@meet.mit.edu"
  
        );
        $to = implode(',', $recipients);
        $subject = "MEETX CONTACT"; // This is your subject
         
        // HTML Message Starts here
        $message ="
        <html>
            <body>
                <table style='width:600px;'>
                    <tbody>
                        <tr>
                            <td style='width:150px'><strong>Name: </strong></td>
                            <td style='width:400px'>$name</td>
                        </tr>
                        <tr>
                            <td style='width:150px'><strong>Email: </strong></td>
                            <td style='width:400px'>$email_id</td>
                        </tr>
              
                        <tr>
                            <td style='width:150px'><strong>Message: </strong></td>
                            <td style='width:400px'>$msg</td>
                        </tr>
                    </tbody>
                </table>
            </body>
        </html>
        ";
        // HTML Message Ends here
         
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
        // More headers
        $headers .= 'From: MEETX SITE' . "\r\n"; // Give an email id on which you want get a reply. User will get a mail from this email id
       
        if(mail($to,$subject,$message,$headers)){
            // Message if mail has been sent
            echo "<script>
                    window.location = 'http://www.google.com/';


                </script>";
            
        }
 
        else{
            // Message if mail has been not sent
            echo "<script>
                    alert('EMAIL FAILED');
                     window.location = 'http://www.google.com/';

                </script>";
        }
    }
?>

    
   