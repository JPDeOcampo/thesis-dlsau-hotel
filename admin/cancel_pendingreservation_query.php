<?php
require_once 'connect.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



if(isset($_POST['cancel_pendingreservation'])){

    $firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
	$purposeofstay = $_POST['purposeofstay'];
	$position = $_POST['position'];
	$adults = $_POST['adults'];
	$children = $_POST['children'];
	$room_type = $_POST['room_type'];
	$room_price = $_POST['room_price'];
	$checkin = $_POST['checkin'];
	//$bookcheckin_time = $_POST['bookcheckin_time'];
	$checkout = $_POST['checkout'];
	//$bookcheckout_time = $_POST['bookcheckout_time'];
	$cancellation_fee = $_POST['cancellation_fee'];
	$payment_method = $_POST['payment_method'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $days = $_POST['days'];
	
    $sql = "DELETE FROM `transaction` WHERE transaction_id='".$_GET["transaction_id"]."'";
    $res = $conn->query($sql) ;
	$sql1 = "DELETE FROM `guest` WHERE guest_id='".$_GET["guest_id"]."'";
    $res1 = $conn->query($sql1);
	
	$conn->query("INSERT INTO `cancel_reservation` (firstname, lastname, email, address, contact, purposeofstay, position, adults, children, room_type, room_price, checkin, days, checkout, status, cancellation_fee, payment_method)
	             VALUES('$firstname', '$lastname', '$email', '$address', '$contact', '$purposeofstay', '$position', '$adults', '$children', '$room_type', '$room_price', '$checkin', '$days', '$checkout', 'Cancelled Reservation', '$cancellation_fee', '$payment_method')") or die(mysqli_error($conn));
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
        $mail->addAddress($email);              
        $mail->addReplyTo('dlsauhotel@gmail.com');
        
        //Content
        $mail_content = '<html>
    <head>
        <meta content="text/html;charset=iso-8859-1" http-equiv=content-type>
        <title>De La Salle Hotel School Online Reservation</title>
        <style>
            <!--
                body,td,th {
                	font-size: medium;
                	color: #FFFFFF;
                }
                body {
                	background-color: #ffdead;
                }
                .style3 {
                	font-size: 18px;
                	font-weight: bold;
					
                }
                .style4 {
                	font-size: small;
                	font-weight: bold;
                }
                .style5 {font-size: medium}
                -->
        </style>
        <style>.ezoic-ad{display:inline-block;line-height:0px;border:0px;}
            .adtester-container-608,.adtester-container-101,.adtester-container-188,.adtester-container-600,.adtester-container-128,.adtester-container-136,.adtester-container-148,.adtester-container-138,.adtester-container-169,.adtester-container-602,.adtester-container-155,.adtester-container-113,.adtester-container-133,.adtester-container-157,.adtester-container-614,.adtester-container-626,.adtester-container-109,.adtester-container-194,.adtester-container-131,.adtester-container-124,.adtester-container-149,.adtester-container-617,.adtester-container-609,.adtester-container-603,.adtester-container-177,.adtester-container-168,.adtester-container-627,.adtester-container-112,.adtester-container-129,.adtester-container-117,.adtester-container-607,.adtester-container-115,.adtester-container-187,.adtester-container-623,.adtester-container-183,.adtester-container-120,.adtester-container-178,.adtester-container-123,.adtester-container-196,.adtester-container-108,.adtester-container-127,.adtester-container-621,.adtester-container-628,.adtester-container-147,.adtester-container-167,.adtester-container-106,.adtester-container-163,.adtester-container-606,.adtester-container-125,.adtester-container-134,.adtester-container-190,.adtester-container-158,.adtester-container-612,.adtester-container-195,.adtester-container-159,.adtester-container-619,.adtester-container-186,.adtester-container-189,.adtester-container-130,.adtester-container-107,.adtester-container-611,.adtester-container-618,.adtester-container-100,.adtester-container-605,.adtester-container-197,.adtester-container-616,.adtester-container-140,.adtester-container-164,.adtester-container-154,.adtester-container-116,.adtester-container-137,.adtester-container-625,.adtester-container-184,.adtester-container-153,.adtester-container-119,.adtester-container-185,.adtester-container-156,.adtester-container-152,.adtester-container-146,.adtester-container-199,.adtester-container-132,.adtester-container-166,.adtester-container-135,.adtester-container-193,.adtester-container-102,.adtester-container-198,.adtester-container-182,.adtester-container-624,.adtester-container-622,.adtester-container-610,.adtester-container-121,.adtester-container-620,.adtester-container-604,.adtester-container-122,.adtester-container-139,.adtester-container-103,.adtester-container-110,.adtester-container-160,.adtester-container-191,.adtester-container-180,.adtester-container-181,.adtester-container-111,.adtester-container-165,.adtester-container-104,.adtester-container-615,.adtester-container-179,.adtester-container-114,.adtester-container-162,.adtester-container-192,.adtester-container-613,.adtester-container-161,.adtester-container-126{display:none!important}
            .ezoic-floating-bottom { display: none!important; }
        </style>
        <link rel=canonical href=https://setupmyhotel.com/Documents/Reservation%20Confirmation%20Template%20HTML%20-%20Navajo%20White.html>

    </head>
    <body style="background-color: #fafafa;">
        <div align=center>
            <table width=600 border=1 bordercolor=#00000>
                <tr>
                    <td colspan=5 bordercolor=#00000 bgcolor=#13322b>
                        <div align=center>
                            <p class=style3><a style="color:#FFFFFF">De La Salle Hotel School Reservation</a>
                        </div>
                <tr>
                    <td colspan=5 bordercolor=#00000 bgcolor=#13322b><img src="cid:header" alt="Header" width=600 height=188>
				<tr>	
					<td colspan=5 bordercolor=#00000 bgcolor=#13322b>
					<div align=center>
                        <p class=style3><a style="color:#FFFFFF">CANCELLED RESERVATION</a>
						</div>
                <tr>
                    <td colspan=5 bordercolor=#00000 bgcolor=#13322b>
                        <div align=left style="color:#FFFFFF"><strong>Dear Mr./Mrs. '.$lastname.',</strong><br><p align=justify> &nbsp; &nbsp; &nbsp; &nbsp; '.$message.' </p></div>
                <tr>
                    <td colspan=5 bordercolor=#00000 bgcolor=#13322b>
                        <div align=left style="color:#FFFFFF"><strong>Cancelled Reservation Details:</strong></div>
                <tr>
                    <td width=121 bordercolor=#00000 bgcolor=#13322b>
                        <div align=left><span class=style4>Guest Name</span></div>
                    <td width=473 colspan=4 bordercolor=#00000 bgcolor=#13322b>'.$firstname." ".$lastname.'&nbsp;
				<tr>
                    <td bordercolor=#00000 bgcolor=#13322b>
                        <div align=left><span class=style4>Position</span></div>
                    <td colspan=4 bordercolor=#00000 bgcolor=#13322b>'.$position.'&nbsp;
				<tr>
                    <td bordercolor=#00000 bgcolor=#13322b>
                        <div align=left><span class=style4>Purpose Of Stay</span></div>
                    <td colspan=4 bordercolor=#00000 bgcolor=#13322b>'.$purposeofstay.'&nbsp;
				<tr>
                    <td bordercolor=#00000 bgcolor=#13322b>
                        <div align=left><span class=style4>Adults</span></div>
                    <td colspan=4 bordercolor=#00000 bgcolor=#13322b>'.$adults.'&nbsp;
                <tr>
                    <td bordercolor=#00000 bgcolor=#13322b>
                        <div align=left><span class=style4>Children</span></div>
                    <td colspan=4 bordercolor=#00000 bgcolor=#13322b>'.$children.'&nbsp;
				 <tr>
                    <td bordercolor=#00000 bgcolor=#13322b>
                        <div align=left><span class=style4>Room Type</span></div>
                    <td colspan=4 bordercolor=#00000 bgcolor=#13322b>'.$room_type.'&nbsp;
                <tr>
                    <td bordercolor=#00000 bgcolor=#13322b>
                        <div align=left><span class=style4>Room Rate</span></div>
                    <td colspan=4 bordercolor=#00000 bgcolor=#13322b>'.$room_price.' per night &nbsp;
                <tr>
                    <td bordercolor=#00000 bgcolor=#13322b>
                        <div align=left><span class=style4>Check-In Date</span></div>
                    <td colspan=4 bordercolor=#00000 bgcolor=#13322b>'.$checkin.'&nbsp;
				<tr>
                    <td bordercolor=#00000 bgcolor=#13322b>
                        <div align=left><span class=style4>Nights</span></div>
                    <td colspan=4 bordercolor=#00000 bgcolor=#13322b>'.$days.'&nbsp;
				<tr>
                    <td bordercolor=#00000 bgcolor=#13322b>
                        <div align=left><span class=style4>Check Out Date</span></div>
                    <td colspan=4 bordercolor=#00000 bgcolor=#13322b>'.$checkout.'&nbsp;	
                <tr>
                    <td colspan=5 bordercolor=#00000 bgcolor=#13322b>
                        <div align=left><strong>Hotel Policy:</strong></div>
            
                <tr>
                    <td bordercolor=#00000 bgcolor=#13322b>
                        <div align=left><span class=style4>Cancellation Policy</span></div>
                    <td colspan=4 bordercolor=#00000 bgcolor=#13322b>
                        <div align=left><span class=style5><p> Guaranteed reservations cancelled within 48 hours of arrival will be subject to a one night charge.</p></span></div>
				<tr>
                    <td bordercolor=#00000 bgcolor=#13322b>
                        <div align=left><span class=style4>Policy</span></div>
                    <td colspan=4 bordercolor=#00000 bgcolor=#13322b>
                        <div align=left><span class=style5><p>Please pay on or before the booked date. A deposit equivalent to 50% of the total amount of the billing. Shall be required to confirm all bookings.<p></span></div>
                <tr>
                    <td colspan=5 bordercolor=#00000 bgcolor=#13322b>
                        <div align=left>
                            <p align=left>The Lasallian Hotel. <a href=https://dlsau-hotel.xyz</a> | <a href=https://www.facebook.com/hoteldelasalle/>www.facebook.com/hoteldelasalle</a>
                        </div>
            </table>
        </div>
    </body>
</html>';
		
		
        $mail->isHTML(true);                                  
        $mail->Subject = $subject;
		$mail->AddEmbeddedImage('../images/email_image.jpg', 'header');
        $mail->Body    = $mail_content;
        $mail->send();
		
       $_SESSION['result'] = 'Message has been sent';
	   $_SESSION['status'] = 'ok';
    } catch (Exception $e) {
	   $_SESSION['result'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
	   $_SESSION['status'] = 'error';
    }

}
?>
	<script>
	alert("Successfully Cancel a Pending Reservation!");
	window.location = "cancel_reservation_details.php";
    </script>
