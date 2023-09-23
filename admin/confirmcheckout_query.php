<?php
	require_once 'connect.php';
	date_default_timezone_set('Asia/Manila');
	use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
	if(isset($_POST['confirmcheckout_query'])){
    $fullname = $_POST['fullname'];
    $email_address = $_POST['email_address'];
    $address = $_POST['address'];
    $contact_no = $_POST['contact_no'];
	$purposeofstay = $_POST['purposeofstay'];
	$position = $_POST['position'];
	
	$adults = $_POST['adults'];
	$children = $_POST['children'];
	
	$room_type = $_POST['room_type'];
	$room_no = $_POST['room_no'];
	$room_price = $_POST['room_price'];
	
	$days = $_POST['days'];
	$extend_days = $_POST['extend_days'];
	
	$early_checkin = $_POST['early_checkin'];
	$late_checkout = $_POST['late_checkout'];
	$extra_towel = $_POST['extra_towel'];
	$extra_bed = $_POST['extra_bed'];
	$lost_key = $_POST['lost_key'];
	
    $extra_towel_price = 100* $extra_towel;
	$extra_bed_price = 500* $extra_bed;
	$extra_lostkey_price = 300* $lost_key;
	
	$checkin = $_POST['checkin'];
	//$bookcheckin_time = $_POST['bookcheckin_time'];
	$checkin_time = $_POST['checkin_time'];
	
	$checkout = $_POST['checkout'];
	//$bookcheckout_time = $_POST['bookcheckout_time'];
	$checkout_time = $_POST['checkout_time'];
	
	$generate_code = $_POST['generate_code'];
	$deposit_total = $_POST['deposit_total'];
	$discount = $_POST['discount'];
	
	$payment_reservation = $_POST['payment_reservation'];
	
	$previous_balance = $_POST['previous_balance'];
	
	$deposit_total = $_POST['deposit_total'];
	$discount = $_POST['discount'];
	$discount_total = $_POST['discount_total'];
	
	$total_amount = $_POST['total_amount'];
	
	
	$status = 'Check Out';
	
	$time = date("H:i:s", strtotime("+7 HOURS"));
	$payment_date = date("Y/m/d");
	$payment_time = date("H:i:s");
	
	$payment_method = $_POST['payment_method'];
	$payment_status = $_POST['payment_status'];
	
	$total = $discount_total + $early_checkin + $extra_towel_price + $extra_bed_price + $extra_lostkey_price + $late_checkout;
	//$total =  $semi_total - $previous_balance;
	
	$total1 = $room_price * $extend_days;
	$total2 = ($total1 / 100) * $discount;
	
	$total3 = $total1 - $total2;
	
	$extend_discount = $total3;
	$extend_bill = (int)$extend_discount;

	//$conn->query("UPDATE `transaction` SET `payment_method` = '$payment_method', `payment_status` = '$payment_status' WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
	

	$conn->query("INSERT INTO `checkout_report` (fullname, email_address, address, contact_no, purposeofstay, position, adults, children, room_type, room_no, room_price, days, extend_days, early_checkin, extra_towel, extra_bed, lost_key, checkin, checkin_time, checkout, checkout_time, generate_code, deposit_total, discount, discount_total, previous_balance, total_amount, deposit, status, payment_date, payment_time, payment_method, payment_status, late_checkout)
	             VALUES('$fullname', '$email_address', '$address', '$contact_no', '$purposeofstay', '$position', '$adults', '$children', '$room_type', '$room_no', '$room_price', '$days', '$extend_days', '$early_checkin', '$extra_towel', '$extra_bed', '$lost_key', '$checkin', '$checkin_time', '$checkout', '$checkout_time', '$generate_code', '$deposit_total', '$discount', '$discount_total', '$previous_balance', '$total', '$payment_reservation', '$status', '$payment_date', '$payment_time', '$payment_method', '$payment_status', '$late_checkout')") or die(mysqli_error($conn));
	
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
        $mail->addAddress($email_address);              
        $mail->addReplyTo('dlsauhotel@gmail.com');
        
        //Content
		$mail_content = '<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />



		<!-- Invoice styling -->
		<style>
			body {
				font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
				text-align: center;
				color: #777;
			}

			body h1 {
				font-weight: 300;
				margin-bottom: 0px;
				padding-bottom: 0px;
				color: #000;
			}

			body h3 {
				font-weight: 300;
				margin-top: 10px;
				margin-bottom: 20px;
				font-style: italic;
				color: #555;
			}

			body a {
				color: #06f;
			}

			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
				border-collapse: collapse;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				line-height: 45px;
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.heading td {
				background: #eee;
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			}

			.invoice-box table tr.details td {
				padding-bottom: 15px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}
		</style>
	</head>

	<body>
	<center>
		<h1>De La Salle Hotel School Online Reservation</h1>
		<center><h1>Official Receipt</h1></center>
		<h3>Thank you for choosing De La Salle Hotel School.</h3>
		<h3>I hope we achieved our goal of making your stay memorable by providing outstanding service.</h3>
		Follow our page <a href="https://www.facebook.com/hoteldelasalle">De La Salle Hotel School</a>. <br/>
		© 2022 All rights reserved.<a href="http://dlsau-hotel.xyz" target="_blank">De La Salle Hotel School</a>.<br /><br /><br />
     </center>
		<div class="invoice-box">
			<table>
				<tr class="top">
					<td colspan="5">
						<table>
							<tr>
								<td class="title">
									<img src="cid:header" alt="Lasallian Hotel" style="width: 100%; max-width: 480px" />
								</td>
                                 <td></td>
								<td>
									Reference Code: '.$generate_code.'<br />
									Created: '.date("Y/m/d").'<br />
									Payment Method: '.$payment_method.'<br/>
									Payment Status:<a style="color:#1e67b3;"> '.$payment_status.'<a><br/>
								</td>
								<td></td>
								<td></td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>
									No. 86 Victoneta Avenue,<br />
									Potrero 1475 Malabon,<br />
									Philippines
								</td>

								
							</tr>
						</table>
					</td>
				</tr>
				
               <tr class="heading">
					<td>Guest Details</td>
					
					<td></td>
					
					<td></td>
					
					<td></td>
					
					<td></td>
				</tr>
				<tr class="details">
					<td>Name: '.$fullname.'</td>
					<td></td>
					<td>Email: '.$email_address.'</td>
					
				</tr>
					<tr class="details">
					<td>Address: '.$address.'</td>
					<td></td>
					<td>Contact No.: '.$contact_no.'</td>
					
	
				</tr>
					<tr class="details">
					<td>Purpose Of Stay: '.$purposeofstay.'</td>
					<td></td>
					<td>Position: '.$position.'</td>
					
				</tr>
					<tr class="details">
					<td>Adult: '.$adults.'</td>
					<td></td>
					<td>Children: '.$children.'</td>
					
				</tr>
            <tr class="heading">
					<td>Reservation Details</td>
					
					<td></td>
					
					<td></td>
					
					<td></td>
					
					<td></td>
				</tr>

				<tr class="details">
					<td>Check In Date: '.$checkin.'</td>
					<td></td>
					<td>Check Out Date: '.$checkout.'</td>  
					                 
				</tr>
					<tr class="details">
					<td>Check In Time: '.$checkin_time.'</td>
					<td></td>
					<td>Check Out Time: '.$checkout_time.'</td>
					
				</tr>
					<tr class="details">
				   <td>Room No: '.$room_no.'</td>
				   <td></td>
				   <td>Nights: '.$days.'</td>
				   
					
               <tr class="item">
					<td>Room Type - '.$room_type.'</td>
					<td></td>
					<td>Php '.$room_price.'</td>
					
					
				</tr>
				
				<tr class="heading">
				<td>Extend Details</td>
 
                    <td>Quantity</td>
					
					<td>Total Price</td>
					
                    <td>Discount</td>
					
					<td>Discount Price</td>
				</tr>

				<tr class="item">
					<td>'.$room_type.'</td>
                    <td>'.$extend_days.'</td>
					 <td>Php '.$total1.'.00</td>
					<td>'.$discount.'%</td>
              <td>Php '.$extend_bill.'.00</td>
				</tr>
				
	            <tr class="heading">
					<td>Transaction Details</td>
 
                    <td>Quantity</td>
					
                    <td></td>
				   
				    <td>Discount</td>
					
					
					<td>Price</td>
				</tr>
				
				<tr class="item">
					<td>'.$room_type.'</td>
                    <td>'.$days.'</td>
			  <td>Php '.$deposit_total.'</td>
					<td>'.$discount.'%</td>
              <td>Php '.$discount_total.'</td>
				</tr>
				
				<tr class="item">
					<td>Early Check In</td>
                    <td></td>
					<td></td>
					<td></td>
              <td>Php '.$early_checkin.'.00</td>
				</tr>
				<tr class="item">
				<td>Late Check Out</td>
                   <td></td>
				   <td></td>
				   <td></td>
              <td>Php '.$late_checkout.'.00</td>
				</tr>
				
				 <tr class="item">
					<td>Extra Towel</td>
					
                    <td>'.$extra_towel.'</td>
					<td></td>
					<td></td>
					<td>Php '.$extra_towel_price.'.00</td>
				</tr>
				
              <tr class="item">
					<td>Extra Bed</td>
					
                    <td>'.$extra_bed.'</td>
					<td></td>
					<td></td>
					<td>Php '.$extra_bed_price.'.00</td>
				</tr>
				
				 <tr class="item last">
					<td>Lost key</td>
					
                    <td>'.$lost_key.'</td>
					<td></td>
					<td></td>
					<td>Php '.$extra_lostkey_price.'.00</td>
				</tr>
			
				<tr class="total">
					<td></td>
					<td></td>
                    <td>Total:</td>
					<td></td>
					<td><mark>Php '.$total.'.00</mark></td>
				</tr>
			</table>
		</div>
	</body>
</html>';
		
		
        $mail->isHTML(true);                                  
        $mail->Subject = 'De La Salle Hotel School';
		$mail->AddEmbeddedImage('../images/email_image.jpg', 'header');
        $mail->Body    = $mail_content;
        $mail->send();
		
       $_SESSION['result'] = 'Message has been sent';
	   $_SESSION['status'] = 'ok';
    } catch (Exception $e) {
	   $_SESSION['result'] = 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
	   $_SESSION['status'] = 'error';
    }
	$sql = "DELETE FROM `pendingcheckout_report` WHERE pendingcheckout_id='".$_GET["pendingcheckout_id"]."'";
    $res = $conn->query($sql);
	//header("location:checkout.php");
	}
	
?>
   <script>
	alert("Successfully Update a Payment Status!");
	window.location = "checkout.php";
    </script>