<?php
	require_once 'admin/connect.php';
	if(ISSET($_POST['send_message'])){
		$contact_firstnameUCF = $_POST['contact_firstname'];
		$contact_firstname = ucfirst(strtolower($contact_firstnameUCF));
		
		$contact_lastnameUCL = $_POST['contact_lastname'];
		$contact_lastname = ucfirst(strtolower($contact_lastnameUCL));
		
		$contact_email = $_POST['contact_email'];
		$contact_position = $_POST['contact_position'];
		$contact_subject = $_POST['contact_subject'];
		$contact_message = $_POST['contact_message'];
		
		
		$conn->query("INSERT INTO `contact` (contact_firstname, contact_lastname, contact_email, contact_position, contact_subject, contact_message) VALUES('$contact_firstname', '$contact_lastname', '$contact_email', '$contact_position', '$contact_subject', '$contact_message')") or die(mysqli_error());
		
		echo "<script type='text/javascript'>alert('Succesfully Send Message');</script>";
	}
		
?>
