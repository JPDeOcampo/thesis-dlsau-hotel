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
	    date_default_timezone_set('Asia/Manila');
	    if(ISSET($_POST['extend_date'])){
		$checkin = $_POST['checkin'];
		//$bookcheckin_time = $_POST['bookcheckin_time'];
		$dayss = $_POST['dayss'];
		$checkout = $_POST['checkout'];
		//$bookcheckout_time = $_POST['bookcheckout_time'];
		
		//$total_balance = $_POST['total_balance'];
		
		$extended_days = $_POST['extended_days'];
		
		//$extend_reservation = $_POST['extend_reservation'];
		
		//$discount = $_POST['discount'];
		
		$transid = $_GET['transaction_id'];
		$roomid = $_GET['room_id'];
		
		$query_transid = $conn->query("SELECT * FROM `transaction` WHERE `transaction_id` = '$transid'") or die(mysqli_error($conn));
		$row_transid = $query_transid->fetch_array();
		
		$query_roomid = $conn->query("SELECT * FROM `room` WHERE `room_id` = '$roomid'") or die(mysqli_error($conn));
		$row_roomid = $query_roomid->fetch_array();
		
		$query44 = $conn->query("SELECT * FROM `room_type` WHERE `roomtype_id` = '".$row_roomid['room_type']."'") or die(mysqli_error($conn));
	    $row44 = $query44->fetch_array();
		
		$date1=date_create($checkin);
        $date2=date_create($checkout);
        $diff=date_diff($date1,$date2);
        $days=$diff->format("%a");
		
	
		$total_days = $days - $dayss;
		$total = $row_roomid['price'] * $total_days;
		$total2 = ($total / 100) * $row_transid['discount'];
		$total3 = $total - $total2;
		$total4 = $total_days + $extended_days;
	    $total5 = $total3 + $row_transid['bill'];
		$total6 = $total + $row_transid['deposit_total'];
		$total7 = $total3 + $row_transid['discount_total'];
		
		
		//Check Out
		$query4 = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '$checkout' && `room_id` = '$roomid' && `status` = 'Pending Reservation'") or die(mysqli_error($conn));
		$row4 = $query4->num_rows;
	    $query5 = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '$checkout' && `room_id` = '$roomid' && `status` = 'Pending Payment Reservation'") or die(mysqli_error($conn));
		$row5 = $query5->num_rows;
	    $query6 = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '$checkout' && `room_id` = '$roomid' && `status` = 'Pending Check In'") or die(mysqli_error($conn));
	    $row6 = $query6->num_rows;
	   
	    //$query8 = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '$checkin' && `room_id` = '$room_type' && `status` = 'Pending Reservation'") or die(mysqli_error($conn));
		//$row8 = $query8->num_rows;
	   
	    
		if($checkout <= $checkin){	
				echo "<script type='text/javascript'>alert('Check Out must be present date');history.go(-1);</script>";
	    }elseif($row4 >= 1 || $row5 >= 1 || $row6 >= 1){
					echo "<div class = 'modal-date' id='myModal'>
					      <div class='modal-contentdate'>
					            <span class='close'><a onclick='history.go(-1)'>&times;</a></span>
								<label style = 'color:#ff0000;'>Not Available Date to Extend Nights</label><br />";
								//--------------------------------------------Pending Reservation--------------------------------------------------------------------------
	                    	$query_transpr = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '$checkout' && `status` = 'Pending Reservation'") or die(mysqli_error($conn));
		                    //----------------------------------------------Pending Payment Reservation----------------------------------------------------------------------
		                   $query_transppr = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '$checkout' && `status` = 'Pending Payment Reservation'") or die(mysqli_error($conn));
		                    //------------------------------------------------------Pending Check In--------------------------------------------------------------
		                 $query_transpc = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '$checkout' && `status` = 'Pending Check In'") or die(mysqli_error($conn));
		                  //----------------------------------------------------------------------------------------------------------------------	
							//$q_date = $conn->query("SELECT * FROM `transaction` WHERE `status` = 'Pending Reservation'") or die(mysqli_error());
							$pr_datee = $conn->query("SELECT `checkin`, COUNT(checkin) FROM `transaction` WHERE `checkin` = '$checkout' && `room_id` = '$roomid' && `status` = 'Pending Reservation' GROUP BY `checkin` HAVING COUNT(checkin) >= 1;") or die(mysqli_error());
							$ppr_datee = $conn->query("SELECT `checkin`, COUNT(checkin) FROM `transaction` WHERE `checkin` = '$checkout' && `room_id` = '$roomid' && `status` = 'Pending Payment Reservation' GROUP BY `checkin` HAVING COUNT(checkin) >= 1;") or die(mysqli_error($conn));
							$pci_datee = $conn->query("SELECT `checkin`, COUNT(checkin) FROM `transaction` WHERE `checkin` = '$checkout' && `room_id` = '$roomid' && `status` = 'Pending Check In' GROUP BY `checkin` HAVING COUNT(checkin) >= 1;") or die(mysqli_error($conn));
							
							echo "___________________________________________";
							echo "<br><label><mark>Pending Reservation:<mark></label></br>";
								if($row4 == 0){
							 echo " ";
							
							}else{
							while($pr_date = $pr_datee->fetch_array()){
							
							echo "
								    <ul>
										
										   <label class = 'alert-danger'><span>**</span>".date("M d, Y", strtotime($pr_date['checkin']."+7HOURS")).": '".$row44['room_type']."'<span>**</span></label>		
										
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
							
							//--------------------------------------Pending Payment Reservation-------------------------------------------------------
							echo "___________________________________________";
							echo "<br><label><mark>Pending Payment Reservation:<mark></label></br>";
							if($row5 == 0){
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
							if($row6 == 0){
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
	
				//}elseif($total_days < -1){
				//echo "<script>
	           //alert('Date is Less than!');history.go(-1);
               //<script>";
				}else{
		$conn->query("UPDATE `transaction` SET `deposit_total` = '$total6', `discount_total` = '$total7', `bill` = '$total5', `checkin` = '$checkin',`checkout` = '$checkout', `days` = '$days', `extend_days` = '$total4' WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
		//header("location:pendingcheckin.php");
		echo "<script>
	alert('Successfully Extend Guest Reservation!');history.go(-1);
	
    </script>";
		}
		}
?>
