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
	    if(ISSET($_POST['upgrade_room'])){
		$room_type = $_POST['room_type'];
		$room_price = $_POST['room_price'];
		//$checkin = $_POST['checkin'];
		//$bookcheckin_time = $_POST['bookcheckin_time'];
		//$checkout = $_POST['checkout'];
		//$bookcheckout_time = $_POST['bookcheckout_time'];
		//$total_balance = $_POST['total_balance'];
		$discount = $_POST['discount'];
		
		$transid = $_GET['transaction_id'];
		$roomid = $_GET['room_id'];
		
		
		
		
		$query_transid = $conn->query("SELECT * FROM `transaction` WHERE `transaction_id` = '$transid'") or die(mysqli_error($conn));
		$row_transid = $query_transid->fetch_array();
		
		$query33 = $conn->query("SELECT * FROM `room` WHERE `room_id` = '$room_type'") or die(mysqli_error($conn));
	    $row33 = $query33->fetch_array();
		
		$query44 = $conn->query("SELECT * FROM `room_type` WHERE `roomtype_id` = '".$row33['room_type']."'") or die(mysqli_error($conn));
	    $row44 = $query44->fetch_array();
		
		$query55 = $conn->query("SELECT * FROM `room` WHERE `room_id` = '$roomid'") or die(mysqli_error($conn));
	    $row_urlroomid = $query55->fetch_array();
		//--------------------------------------------Pending Reservation--------------------------------------------------------------------------
		$query_transpr = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '".$row_transid['checkin']."' && `status` = 'Pending Reservation'") or die(mysqli_error($conn));
		

		$query_transpr_row = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '".$row_transid['checkin']."' && `status` = 'Pending Reservation'") or die(mysqli_error($conn));
		$row_transpr_row = $query_transpr_row->num_rows;
		
		
		//----------------------------------------------Pending Payment Reservation----------------------------------------------------------------------
		$query_transppr = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '".$row_transid['checkin']."' && `status` = 'Pending Payment Reservation'") or die(mysqli_error($conn));
		
		
		$query_transppr_row = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '".$row_transid['checkin']."' && `status` = 'Pending Payment Reservation'") or die(mysqli_error($conn));
		$row_transppr_row = $query_transppr_row->num_rows;
		
		
		//------------------------------------------------------Pending Check In--------------------------------------------------------------
		
		$query_transpc = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '".$row_transid['checkin']."' && `status` = 'Pending Check In'") or die(mysqli_error($conn));
		
		
		$query_transpc_row = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '".$row_transid['checkin']."' && `status` = 'Pending Check In'") or die(mysqli_error($conn));
		$row_transpc_row = $query_transpc_row->num_rows;
		
		
		//----------------------------------------------------------------------------------------------------------------------
		
		
		$date1=date_create($row_transid['checkin']);
        $date2=date_create($row_transid['checkout']);
        $diff=date_diff($date1,$date2);
        $days=$diff->format("%a");
		
		$total = $room_price * $days;
		$total2 = ($total / 100) * $discount;
		$total3 = $total - $total2;
		
		
		$total4 = $row_urlroomid['price'] * $days;
		$total5 = ($total4 / 100) * $discount;
		$total6 = $total4 - $total5;	 
		$total7 = $total3 - $total6;
	    
		$total8 = $total7 + $row_transid['bill'];
	    $total9 = $total7 + $row_transid['previous_balance'];
		
		//Check In		
		$query = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '".$row_transid['checkin']."' && `room_id` = '$room_type' && `status` = 'Pending Reservation'") or die(mysqli_error($conn));
		$row = $query->num_rows;
	    $query2 = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '".$row_transid['checkin']."' && `room_id` = '$room_type' && `status` = 'Pending Payment Reservation'") or die(mysqli_error($conn));
		$row2 = $query2->num_rows;
	    $query3 = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '".$row_transid['checkin']."' && `room_id` = '$room_type' && `status` = 'Pending Check In'") or die(mysqli_error($conn));
	    $row3 = $query3->num_rows;
		
		
	
	   
	    //$query8 = $conn->query("SELECT * FROM `transaction` WHERE `checkin` = '$checkin' && `room_id` = '$room_type' && `status` = 'Pending Reservation'") or die(mysqli_error($conn));
		//$row8 = $query8->num_rows;
	    if($room_price <= $row_urlroomid['price']){
		        echo "<script type='text/javascript'>alert('The hotel only allow to upgrade room');history.go(-1);</script>";
		}elseif($row >= 1 || $row2 >= 1 || $row3 >= 1){
					echo "<div class = 'modal-date' id='myModal'>
					      <div class='modal-contentdate'>
					            <span class='close'><a onclick='history.go(-1)'>&times;</a></span>
								<label style = 'color:#ff0000;'>Room Is Not Available For The Following Date</label><br />";
							//$q_date = $conn->query("SELECT * FROM `transaction` WHERE `status` = 'Pending Reservation'") or die(mysqli_error());
							 $pr_datee = $conn->query("SELECT `checkin`, COUNT(checkin) FROM `transaction` WHERE `checkin` = '".$row_transid['checkin']."' && `room_id` = '$room_type' && `status` = 'Pending Reservation' GROUP BY `checkin` HAVING COUNT(checkin) >= 1;") or die(mysqli_error());
							//$pr_datee1 = $conn->query("SELECT `checkin`, COUNT(checkin) FROM `transaction` WHERE `checkin` = '".$row_transpr['checkin']."' && `status` = 'Pending Reservation' GROUP BY `checkin` HAVING COUNT(checkin) >= 1;") or die(mysqli_error());
							//$pr_datee1 = $conn->query("SELECT * FROM `transaction` WHERE `status` = 'Pending Reservation'") or die(mysqli_error());
							$ppr_datee = $conn->query("SELECT `checkin`, COUNT(checkin) FROM `transaction` WHERE `checkin` = '".$row_transid['checkin']."' && `room_id` = '$room_type' && `status` = 'Pending Payment Reservation' GROUP BY `checkin` HAVING COUNT(checkin) >= 1;") or die(mysqli_error());
							$pci_datee = $conn->query("SELECT `checkin`, COUNT(checkin) FROM `transaction` WHERE `checkin` = '".$row_transid['checkin']."' && `room_id` = '$room_type' && `status` = 'Pending Check In' GROUP BY `checkin` HAVING COUNT(checkin) >= 1;") or die(mysqli_error());
							//$pci_date = $conn->query("SELECT * FROM `transaction` WHERE `status` = 'Pending Check In'") or die(mysqli_error($conn));
							
							echo "___________________________________________";
							echo "<br><label><mark>Pending Reservation:<mark></label></br>";
							if($row_transpr_row == 0){
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
							
							//--------------------------------Pending Payment Reservation-----------------------------------------------		
							echo "___________________________________________";
							echo "<br><label><mark>Pending Payment Reservation:<mark></label></br>";
							if($row_transppr_row == 0){
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
							if($row_transpc_row == 0){
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
				
			}elseif($row_transid['bill'] <= 0){
		     $total = $room_price * $days;
		     $total2 = ($total / 100) * $discount;
		     $total3 = $total - $total2;
			 
		     $total4 = $row_urlroomid['price'] * $days;
			 $total5 = ($total4 / 100) * $discount;
		     $total6 = $total4 - $total5;
			 
			 $total7 = $total3 - $total6;
			 $conn->query("UPDATE `transaction` SET `room_id` = '$room_type', `deposit_total` = '$total', `discount_total` = '$total3', `previous_balance` = '$total7', `bill` = '$total7'  WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
		      //header("location:pendingcheckin.php");
		     echo "<script>
	         alert('Successfully Change a Room!');history.go(-1);
	         
              </script>";
				}else{
		$conn->query("UPDATE `transaction` SET `room_id` = '$room_type', `deposit_total` = '$total', `discount_total` = '$total3', `previous_balance` = '$total9', `bill` = '$total8'  WHERE `transaction_id` = '$_REQUEST[transaction_id]'") or die(mysqli_error());
		//header("location:pendingcheckin.php");
		echo "<script>
	alert('Successfully Change a Room!');history.go(-1);
	
    </script>";
		}
		}
?>
