<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {"Poppins", Arial, sans-serif}

/* Modal Content */
.modal-contentdate {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 20%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
</html>
<?php
require_once 'connect.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



if(isset($_POST['confirm_form'])){
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
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $generate_code = $_POST['generate_code'];
	//$room_type = $_POST['room_type'];
	//$room_price = $_POST['room_price'];
	
	$discount = $_POST['discount'];
	

	
	$sql2 = "SELECT * FROM `room` WHERE room_id='".$room_type."'";
    $result2=$conn->query($sql2);
	$row2=$result2->fetch_assoc();
	
	$room_type1 = $row2['room_type'];					
	$sql3 = "SELECT * FROM `room_type` WHERE `roomtype_id` = '".$row2['room_type']."'";
    $result3=$conn->query($sql3);						  
	$row3 = $result3->fetch_assoc();
	
	$query33 = $conn->query("SELECT * FROM `room` WHERE `room_id` = '$room_type'") or die(mysqli_error($conn));
	$row33 = $query33->fetch_array();
	
	$query44 = $conn->query("SELECT * FROM `room_type` WHERE `roomtype_id` = '".$row33['room_type']."'") or die(mysqli_error($conn));
	$row44 = $query44->fetch_array();
	
	//--------------------------------------------Pending Reservation--------------------------------------------------------------------------
		$query_transpr = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '$checkin' && `room_id` = '$room_type' && `status` = 'Pending Reservation'") or die(mysqli_error($conn));
		//----------------------------------------------Pending Payment Reservation----------------------------------------------------------------------
		$query_transppr = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '$checkin' && `room_id` = '$room_type' && `status` = 'Pending Payment Reservation'") or die(mysqli_error($conn));
		//------------------------------------------------------Pending Check In--------------------------------------------------------------
		$query_transpc = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '$checkin' && `room_id` = '$room_type' && `status` = 'Pending Check In'") or die(mysqli_error($conn));
		//----------------------------------------------------------------------------------------------------------------------
	
	
	$discountcondition = ($discount == "100" ? "0" : $discount);
	
	$date1=date_create($checkin);
    $date2=date_create($checkout);
    $diff=date_diff($date1,$date2);
    $days=$diff->format("%a");
	
	$total = $room_price * $days;
	$total2 = ($total / 100) * $discount;
	$total3 = $total - $total2;
	$bill_int = $total3;
	$total_bill = (int)$bill_int;
	
	$querypr = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '$checkin' && `room_id` = '$room_type' && `status` = 'Pending Reservation'") or die(mysqli_error($conn));
	$rowpr = $querypr->num_rows;
	$queryppr = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '$checkin' && `room_id` = '$room_type' && `status` = 'Pending Payment Reservation'") or die(mysqli_error($conn));
	$rowppr = $queryppr->num_rows;
	$queryci = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '$checkin' && `room_id` = '$room_type' && `status` = 'Pending Check In'") or die(mysqli_error($conn));
	$rowci = $queryci->num_rows;
	if($rowpr >= 2 || $rowppr >=1 || $rowci >=1){	
		//echo "<script type='text/javascript'>alert('Room Type Is not Available');history.go(-1);<script>";
		echo "<div class = 'modal-date' id='myModal'>
					      <div class='modal-contentdate'>
					            <span class='close'><a onclick='history.go(-1)'>&times;</a></span>
								<label style = 'color:#ff0000;'>Room Is Not Available For The Following Date</label><br />";
							//$q_date = $conn->query("SELECT * FROM `transaction` WHERE `status` = 'Pending Reservation'") or die(mysqli_error());
							$pr_datee = $conn->query("SELECT `checkin`, COUNT(checkin) FROM `transaction` WHERE `checkin` = '$checkin' && `room_id` = '$room_type' && `status` = 'Pending Reservation' GROUP BY `checkin` HAVING COUNT(checkin) >= 2;") or die(mysqli_error());
							$ppr_datee = $conn->query("SELECT `checkin`, COUNT(checkin) FROM `transaction` WHERE `checkin` = '$checkin' && `room_id` = '$room_type' && `status` = 'Pending Payment Reservation' GROUP BY `checkin` HAVING COUNT(checkin) >= 1;") or die(mysqli_error());
							$pci_datee = $conn->query("SELECT `checkin`, COUNT(checkin) FROM `transaction` WHERE `checkin` = '$checkin' && `room_id` = '$room_type' && `status` = 'Pending Check In' GROUP BY `checkin` HAVING COUNT(checkin) >= 1;") or die(mysqli_error());
							//$ci_datee = $conn->query("SELECT `checkin`, COUNT(checkin) FROM `transaction` WHERE `checkin` = '$checkin' && `room_id` = '$room_type' && `status` = 'Check In' GROUP BY `checkin` HAVING COUNT(checkin) >= 1;") or die(mysqli_error());
							//$pci_date = $conn->query("SELECT * FROM `transaction` WHERE `status` = 'Pending Check In'") or die(mysqli_error($conn));
								echo "___________________________________________";
							echo "<br><label><mark>Pending Reservation:<mark></label></br>";
							if($rowpr == 0){
							 echo " ";
							
							}else{
							while($pr_date = $pr_datee->fetch_array()){
							
							echo "
								    <ul>
										<li>
										   <label class = 'alert-danger'><span>**</span>".date("M d, Y", strtotime($pr_date['checkin']."+7HOURS")).": '".$row44['room_type']."'<span>**</span></label>		
										</li>
									</ul>";
							
							}
							while($row_transpr = $query_transpr->fetch_array()){
							$query_transpr1 = $conn->query("SELECT * FROM `room` WHERE `room_id` = '".$row_transpr['room_id']."'") or die(mysqli_error());
	                        $row_transpr1 = $query_transpr1->fetch_array();
		
		                    $query_transpr2 = $conn->query("SELECT * FROM `room_type` WHERE `roomtype_id` = '".$row_transpr1['room_type']."'") or die(mysqli_error());
	                        $row_transpr2 = $query_transpr2->fetch_array();
							echo "
								    <ul>
										<li>
										   <label class = 'alert-danger'>".date("M d, Y", strtotime($row_transpr['checkin']."+7HOURS")).": '".$row_transpr2['room_type']."'</label>		
										</li>
									</ul>";
							
							}		
							}
							
							//--------------------------------Pending Payment Reservation-----------------------------------------------		
							echo "___________________________________________";
							echo "<br><label><mark>Pending Payment Reservation:<mark></label></br>";
							if($rowppr == 0){
							 echo " ";
							
							}else{
							while($ppr_date = $ppr_datee->fetch_array()){
							
							echo "
								    <ul>
										
										   <label class = 'alert-danger'><span>**</span>".date("M d, Y", strtotime($ppr_date['checkin']."+7HOURS")).": '".$row44['room_type']."'<span>**</span></label>		
										
									</ul>";
							
							}
							while($row_transppr = $query_transppr->fetch_array()){
							$query_transppr1 = $conn->query("SELECT * FROM `room` WHERE `room_id` = '".$row_transppr['room_id']."'") or die(mysqli_error());
	                        $row_transppr1 = $query_transppr1->fetch_array();
		
		                    $query_transppr2 = $conn->query("SELECT * FROM `room_type` WHERE `roomtype_id` = '".$row_transppr1['room_type']."'") or die(mysqli_error());
	                        $row_transppr2 = $query_transppr2->fetch_array();
							echo "
								    <ul>
										<li>
										   <label class = 'alert-danger'>".date("M d, Y", strtotime($row_transppr['checkin']."+7HOURS")).": '".$row_transppr2['room_type']."'</label>		
										</li>
									</ul>";
							}
							}		
						
							//--------------------------------------Pending Check In-------------------------------------------------------
							echo "___________________________________________";
							echo "<br><label><mark>Pending Check In:<mark></label></br>";
							if($rowci == 0){
							 echo " ";
							
							}else{
								while($pci_date = $pci_datee->fetch_array()){
							
							echo "
								    <ul>
										
										   <label class = 'alert-danger'><span>**</span>".date("M d, Y", strtotime($pci_date['checkin']."+7HOURS")).": '".$row44['room_type']."'<span>**</span></label>		
										
									</ul>";
							
							}
						    while($row_transpc = $query_transpc->fetch_array()){
							$query_transpc1 = $conn->query("SELECT * FROM `room` WHERE `room_id` = '".$row_transpc['room_id']."'") or die(mysqli_error());
	                        $row_transpc1 = $query_transpc1->fetch_array();
		
		                    $query_transpc2 = $conn->query("SELECT * FROM `room_type` WHERE `roomtype_id` = '".$row_transpc1['room_type']."'") or die(mysqli_error());
	                        $row_transpc2 = $query_transpc2->fetch_array();
							echo "
								    <ul>
										<li>
										   <label class = 'alert-danger'>".date("M d, Y", strtotime($row_transpc['checkin']."+7HOURS")).": '".$row_transpc2['room_type']."'</label>		
										</li>
									</ul>";
							}
							}
						"</div></div>";					
	}else{
    $conn->query("UPDATE `transaction` SET `status` = 'Pending Payment Reservation', `generate_code` = '$generate_code', `children` = '$children', `room_id` = '$room_type', `deposit_total` = '$total', `discount` = '$discount', `discount_total` = '$total_bill', `bill` = '$total_bill' WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
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
                            <p class=style3><a style="color:#FFFFFF">De La Salle Hotel School Online Reservation</a>
                        </div>
                <tr>
                    <td colspan=5 bordercolor=#00000 bgcolor=#13322b><img src="cid:header" alt="Header" width=600 height=188>
				<tr>	
					<td colspan=5 bordercolor=#00000 bgcolor=#13322b>
					<div align=center>
                        <p class=style3><a style="color:#FFFFFF">CONFIRM RESERVATION</a>
						</div>
				<tr>
                    <td colspan=5 bordercolor=#00000 bgcolor=#13322b>
                        <div align=left style="color:#FFFFFF"><strong>Dear Mr./Mrs. '.$lastname.',</strong><br><p align=justify> &nbsp; &nbsp; &nbsp; &nbsp;  '.$message.' </p></div>
                <tr>
				  <tr>
                    <td colspan=5 bordercolor=#00000 bgcolor=#13322b>
                    <div align=center style="color:#FFFFFF"><strong>Please pay on or before the booked date. A deposit equivalent to 50% of the total amount of the billing. Shall be required to fully confirm all bookings.</strong></div>
                 <tr>
				 	<tr>
                    <td colspan=5 bordercolor=#00000 bgcolor=#13322b>
                        <div align=left style="color:#FFFFFF"><strong>Status: <mark>NO PAYMENT</mark></strong></div>
                <tr>
                    <td bordercolor=#00000 bgcolor=#13322b>
                        <div align=left><span class=style4>Reservation Total:</span></div>
                    <td colspan=4 bordercolor=#00000 bgcolor=#13322b>PHP '.$total.'.00&nbsp;	
                <tr>
				  <tr>
                    <td bordercolor=#00000 bgcolor=#13322b>
                        <div align=left><span class=style4>Discount:</span></div>
                    <td colspan=4 bordercolor=#00000 bgcolor=#13322b>'.$discountcondition.'%&nbsp;	
                <tr>
                <tr>
                    <td bordercolor=#00000 bgcolor=#13322b>
                        <div align=left><span class=style4>Discount Total:</span></div>
                    <td colspan=4 bordercolor=#00000 bgcolor=#13322b><mark>PHP '.$total_bill.'.00</mark>&nbsp;	
                <tr>
				<tr>
                    <td colspan=5 bordercolor=#00000 bgcolor=#13322b>
                        <div align=left style="color:#FFFFFF"><strong>Reservation Details:</strong></div>
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
                        <div align=left><span class=style4>Reference Code</span></div>
                    <td colspan=4 bordercolor=#00000 bgcolor=#13322b><strong>'.$generate_code.'</strong>&nbsp;
				 <tr>
                    <td bordercolor=#00000 bgcolor=#13322b>
                        <div align=left><span class=style4>Room Type</span></div>
                    <td colspan=4 bordercolor=#00000 bgcolor=#13322b>'.$row3['room_type'].'&nbsp;
                <tr>
                    <td bordercolor=#00000 bgcolor=#13322b>
                        <div align=left><span class=style4>Room Rate</span></div>
                    <td colspan=4 bordercolor=#00000 bgcolor=#13322b>PHP '.$room_price.' per night &nbsp;
               
                <tr>
                    <td bordercolor=#00000 bgcolor=#13322b>
                        <div align=left><span class=style4>Check-In Date</span></div>
                    <td colspan=4 bordercolor=#00000 bgcolor=#13322b>'.$checkin.'&nbsp;
				<tr>
              <tr>
                    <td bordercolor=#00000 bgcolor=#13322b>
                        <div align=left><span class=style4>Nights</span></div>
                    <td colspan=4 bordercolor=#00000 bgcolor=#13322b>'.$days.'&nbsp;
				<tr>
                <tr>
                    <td bordercolor=#00000 bgcolor=#13322b>
                        <div align=left><span class=style4>Check Out Date</span></div>
                    <td colspan=4 bordercolor=#00000 bgcolor=#13322b>'.$checkout.'&nbsp;	
                <tr>
                  
              
				
                <tr>
                    <td colspan=5 bordercolor=#00000 bgcolor=#13322b>
                        <div align=left><strong>Hotel Policy:</strong></div>
            
                <tr>
                    <td bordercolor=#00000 bgcolor=#13322b>
                        <div align=left><span class=style4>Cancellation Policy</span></div>
                    <td colspan=4 bordercolor=#00000 bgcolor=#13322b>
                        <div align=left><span class=style5><p>Hotel De La Salle charges a cancellation fee of P400.00.<p></span></div>
                <tr>
				    <tr>
                    <td bordercolor=#00000 bgcolor=#13322b>
                        <div align=left><span class=style4>Policy</span></div>
                    <td colspan=4 bordercolor=#00000 bgcolor=#13322b>
                        <div align=left><span class=style5><p>Please pay on or before the booked date. A deposit equivalent to 50% of the total amount of the billing. Shall be required to confirm all bookings.<p></span></div>
                <tr>
                    <td colspan=5 bordercolor=#00000 bgcolor=#13322b>
                        <div align=left>
                            <p align=left>The Lasallian Hotel. <a href=http://dlsau-hotel.xyz>www.dlsau-hotel.xyz</a> | <a href=https://www.facebook.com/hoteldelasalle/>www.facebook.com/hoteldelasalle</a>
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
	
	//header("location:pendingcheckin.php");
	echo "<script>
	alert('Successfully Confirm Pending Reservation!');
	window.location = 'pendingpaymentreservation.php';
    </script>";
}
}
?>

