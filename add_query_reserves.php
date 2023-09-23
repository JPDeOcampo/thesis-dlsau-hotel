<?php
	require_once 'admin/connect.php';
	if(ISSET($_POST['add_guest'])){
		$firstnameUCF = $_POST['firstname'];
		$firstname = ucfirst(strtolower($firstnameUCF));
		
		$lastnameUCF = $_POST['lastname'];
		$lastname = ucfirst(strtolower($lastnameUCF));
		
		$email_address = $_POST['email_address'];
		$address = $_POST['address'];
		$adults = $_POST['adults'];
		$children = $_POST['children'];
		$contact_no = $_POST['contact_no'];
		$position = $_POST['position'];
		$purposeofstay = $_POST['purposeofstay'];
		$check_in = $_POST['check_in'];
		
		//$checkintime = $_POST['checkintime'];
		$check_out = $_POST['check_out'];
		//$checkouttime = $_POST['checkouttime'];
		
		$conn->query("INSERT INTO `guest` (firstname, lastname, email_address, address, contact_no, position, purposeofstay) VALUES('$firstname', '$lastname', '$email_address', '$address', '$contact_no', '$position', '$purposeofstay')") or die(mysqli_error($conn));
		$query = $conn->query("SELECT * FROM `guest` WHERE `firstname` = '$firstname' && `lastname` = '$lastname' && `email_address` = '$email_address' && `address` = '$address' && `position` = '$position' && `purposeofstay` = '$purposeofstay' ") or die(mysqli_error($conn));
		$fetch = $query->fetch_array();
	
	    if($guest_id = $fetch['guest_id']){
							$room_id = $_REQUEST['room_id'];
							$conn->query("INSERT INTO `transaction`(guest_id, room_id, adults, children, status, checkin, checkout) VALUES('$guest_id', '$room_id', '$adults', '$children', 'Pending Reservation', '$check_in', '$check_out')") or die(mysqli_error($conn));
							echo "<script>window.location.href= 'reply_reserves.php';</script>";
							//header("location:reply_reserves.php");
						}else{
							echo "<script>alert('Error Javascript Exception!')</script>";
						}
				}	
	
?>