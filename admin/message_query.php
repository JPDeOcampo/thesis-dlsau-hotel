<?php
require_once 'connect.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



if(isset($_POST['reply_message'])){
    $contact_fullname = $_POST['contact_fullname'];
    $contact_email = $_POST['contact_email'];
    $contact_subject = $_POST['contact_subject'];
    $contact_message = $_POST['contact_message'];
  
	
   $sql = "DELETE FROM `contact` WHERE contact_id='".$_GET["contact_id"]."'";
   $res = $conn->query($sql) ;
    //Load composer's autoloader
    require 'vendor/autoload.php';

    $mail = new PHPMailer(true);                            
    try {
        //Server settings
        $mail->isSMTP();                                     
        $mail->Host = 'smtp.gmail.com';                      
        $mail->SMTPAuth = true;                             
        $mail->Username = 'dlsauhotel@gmail.com';     
        $mail->Password = 'qbemelyyjtxuygpt';             
        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
        );                         
        $mail->SMTPSecure = 'ssl';                           
        $mail->Port = 465;                                   

        //Send Email
        $mail->setFrom('dlsauhotel@gmail.com');
        
        //Recipients
        $mail->addAddress($contact_email);              
        $mail->addReplyTo('dlsauhotel@gmail.com');
        
        //Content
		$mail_content = ' 
  <html> 
    <head> 
        <title>De La Salle Hotel School Admin</title> 
    </head> 
    <body>  
     <p>Dear, Mr./Ms. '.$contact_fullname.', </p>  
     </br>
	 <p align=justify> &nbsp; &nbsp; &nbsp; &nbsp;  '.$contact_message.'</p>
     </br>	 
                 
     <p>Thank You!</p>
     </br>
     <p><i>De La Salle Hotel School Admin</i></p>
     <p><i>86 VICTONETA AVENUE, POTRERO, MALABON CITY</i></p>
	 <p><i>&copy;2021 All rights reserved.</i></p>
    </body> 
    </html>'; 
		
		
        $mail->isHTML(true);                                  
        $mail->Subject = $contact_subject;
        $mail->Body    = $mail_content;

        $mail->send();
		
       $_SESSION['result'] = 'Message has been sent';
	   $_SESSION['status'] = 'ok';
    } catch (Exception $e) {
	   $_SESSION['result'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
	   $_SESSION['status'] = 'error';
    }
	
	//header("location:index.php");

}
?>

  <script>
	alert("Successfully Send Message!");
	window.location = "index.php";
    </script>