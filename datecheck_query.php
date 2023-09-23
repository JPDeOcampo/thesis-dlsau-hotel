<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {"Poppins", Arial, sans-serif}

/* The Modal (background) */
.modal-date {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 340px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

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
<body>
<!--<script>
// Get the modal
//var modal = document.getElementById("myModal");

// Get the button that opens the modal
//var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
//var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
//window.onload = function() {
  //modal.style.display = "block";
//}

// When the user clicks on <span> (x), close the modal
//span.onclick = function() {
  //modal.style.display = "none";
//}

// When the user clicks anywhere outside of the modal, close it
//window.onclick = function(event) {
 // if (event.target == modal) {
   // modal.style.display = "none";
  //}
}
</script>-->

</body>
</html>
<?php
	require_once 'admin/connect.php';
	

	if(ISSET($_POST['btn'])){
	$check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
	$adults = $_POST['adults'];
	$children = $_POST['children'];
	$max_person = $adults + $children;
	$query = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '$check_in' && `status` = 'Pending Reservation'") or die(mysqli_error($conn));	
	$row = $query->num_rows;
	$query2 = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '$check_in' && `status` = 'Pending Payment Reservation'") or die(mysqli_error($conn));
	$row2 = $query2->num_rows;
	$query3 = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '$check_in' && `status` = 'Pending Check In'") or die(mysqli_error($conn));
	$row3 = $query3->num_rows;
	$query4 = $conn->query("SELECT * FROM `room`") or die(mysqli_error($conn));
	$row4 = $query4->num_rows;
	$query5 = $conn->query("SELECT MAX(max) AS max_max FROM `room`") or die(mysqli_error($conn));
	$row5 = $query5->fetch_array();
		if($check_in < date("Y-m-d", strtotime('+24 HOURS'))){	
				echo "<script>alert('Check In must be present date');history.go(-1);</script>";
			}elseif($check_in == $check_out){	
				echo "<script type='text/javascript'>alert('Check In and Check Out is not valid');history.go(-1);</script>";
			}elseif($check_out < $check_in){	
				echo "<script type='text/javascript'>alert('Check Out must be present date');history.go(-1);</script>";
			}elseif($max_person > $row5['max_max']){
					echo '<div class = "modal-date" id="myModal">
					      <div class="modal-contentdate">
					            <span class="close"><a onclick="history.go(-1)">&times;</a></span>
								<label style = "color:#ff0000;">The maximum number of people in a room is only:<span style = "color:#000000;"> '.$row5['max_max'].' Persons</span></label><br />';
									"</div></div>";	
			}elseif($row >= $row4){
					echo "<div class = 'modal-date' id='myModal'>
					      <div class='modal-contentdate'>
					            <span class='close'><a onclick='history.go(-1)'>&times;</a></span>
								<label style = 'color:#ff0000;'>Not Available Date</label><br />";
							//$q_date = $conn->query("SELECT * FROM `transaction` WHERE `status` = 'Pending Reservation'") or die(mysqli_error());
							$pr_datee = $conn->query("SELECT `checkin`, COUNT(checkin) FROM `transaction` WHERE `checkin` = '$check_in' && `status` = 'Pending Reservation' GROUP BY `checkin` HAVING COUNT(checkin) >= 1;") or die(mysqli_error());
							
							//$pci_date = $conn->query("SELECT * FROM `transaction` WHERE `status` = 'Pending Check In'") or die(mysqli_error($conn));
							
							while($pr_date = $pr_datee->fetch_array()){
								echo "
								    <ul>
										<li>	
											<label class = 'alert-danger'>".date("M d, Y", strtotime($pr_date['checkin']."+7HOURS"))."</label>
												
										</li>
									</ul>";
									}
									}elseif($row2 >= $row4){
									echo "<div class = 'modal-date' id='myModal'>
					                <div class='modal-contentdate'>
					                <span class='close'><a onclick='history.go(-1)'>&times;</a></span>
								    <label style = 'color:#ff0000;'>Not Available Date</label><br />";
									
									$ppr_datee = $conn->query("SELECT `checkin`, COUNT(checkin) FROM `transaction` WHERE `checkin` = '$check_in' && `status` = 'Pending Payment Reservation' GROUP BY `checkin` HAVING COUNT(checkin) >= 1;") or die(mysqli_error());
							        while($ppr_date = $ppr_datee->fetch_array()){
									
									echo "
								    <ul>
										<li>	
											<label class = 'alert-danger'>".date("M d, Y", strtotime($ppr_date['checkin']."+7HOURS"))."</label>	
										</li>
									</ul>";
									}
									}elseif($row3 >= $row4){
									echo "<div class = 'modal-date' id='myModal'>
					                <div class='modal-contentdate'>
					               <span class='close'><a onclick='history.go(-1)'>&times;</a></span>
								   <label style = 'color:#ff0000;'>Not Available Date</label><br />";
								   $pci_datee = $conn->query("SELECT `checkin`, COUNT(checkin) FROM `transaction` WHERE `checkin` = '$check_in' && `status` = 'Pending Check In' GROUP BY `checkin` HAVING COUNT(checkin) >= 1;") or die(mysqli_error());
									while($pci_date = $pci_datee->fetch_array()){
									echo "
								    <ul>
										<li>	
											<label class = 'alert-danger'>".date("M d, Y", strtotime($pci_date['checkin']."+7HOURS"))."</label>	
										</li>
									</ul>";
									}
									
							
						"</div></div>";
				}else{
				   //$chkdates = "<script>document.write(localStorage.getItem('checkin'))<script>";
				   $check_in = $_POST['check_in'];
				   echo "<script>window.location.href= 'book_room.php?date=$check_in&max=$max_person'</script>";
				   
}
}
?>
