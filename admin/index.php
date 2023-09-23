<!DOCTYPE html>
<html lang="en">
<?php require_once('check_login.php');?>
<?php include('head.php');?>
<?php include 'connect.php';?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
<?php //echo  $_SESSION["email"];
 date_default_timezone_set('Asia/Manila');
 $current_date = date('Y-m-d');?>
   
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
				 <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-ellipsis-h f-s-40 color-primary"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                   <?php $p_re = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 'Pending Reservation'") or die(mysqli_error());
                                    $p_r = $p_re->fetch_array();?> 
                                    <h2 class="color-black"><?php echo $p_r['total']?></h2>
                                    <p class="m-b-0">Total Pending Reservation</p>
                                </div>
                            </div>
                        </div>
                    </div>
					<div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-money f-s-40 color-primary"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                   <?php $p_pre = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 'Pending Payment Reservation'") or die(mysqli_error());
                                    $pp_r = $p_pre->fetch_array();?> 
                                    <h2 class="color-black"><?php echo $pp_r['total']?></h2>
                                    <p class="m-b-0">Total Pending Payment Reservation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-address-card f-s-40 color-primary"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                   <?php $p_ch = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 'Pending Check In'") or die(mysqli_error());
                                    $p_c = $p_ch->fetch_array();?> 
                                    <h2 class="color-black"><?php echo $p_c['total']?></h2>
                                    <p class="m-b-0">Total Pending Check In</p>
                                </div>
                            </div>
                        </div>
                    </div>
					
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-users f-s-40 color-success"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <?php $q_ci = $conn->query("SELECT COUNT(*) as total FROM `transaction` WHERE `status` = 'Check In'") or die(mysqli_error());
                                $f_ci = $q_ci->fetch_array();?> 
                                    <h2 class="color-black"><?php echo $f_ci['total']?></h2>
                                    <p class="m-b-0">Total Guest</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card p-30">
                            <div class="media">
                                <div class="media-left meida media-middle">
                                    <span><i class="fa fa-book f-s-40 color-warning"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <?php $sql="SELECT COUNT(*) FROM `room`";
                                $res = $conn->query($sql);
                                $row=mysqli_fetch_array($res);?> 
                                    <h2 class="color-black"><?php echo $row[0];?></h2>
                                    <p class="m-b-0">Total Room</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           
                
        
                <div class="row justify">
                    <div class="col-md-10">
                        <div class="card p-30" style="width:120%;height: 1800px">
                            <div class="box box-danger">
                                <div class="box-body">
                                  <!-- THE CALENDAR -->
                                  <div id="calendar">
                                      
                                  </div>
                                </div>
                                <!-- /.box-body -->
								
			
                                        
                 <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Message Box</h4>
                                <?php
			    $q_pr = $conn->query("SELECT COUNT(*) as total FROM `contact`") or die(mysqli_error());
				$f_pr = $q_pr->fetch_array();
				
			?>
                 <div class="table-responsive m-t-40">
				 <a class = "btn btn-success disabled"><span class = "badge"><?php echo $f_pr['total']?></span> Message</a>
			
				<br />
				<br />
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="2000px">
                                   <thead>
						<tr>
						    <th>No.</th>
							<th>Name</th>
							<th>Email Address</th>
							<th>Position</th>
							<th>Subject</th>
							<th>Message</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$sql = "SELECT * FROM `contact`";
                            $result = $conn->query($sql);
							$i=1;
							while($row = $result->fetch_assoc()){
							
									
						?>
						<tr>
						    <td><?php echo $i;?></td>
							<td><?php echo $row['contact_firstname']." ".$row['contact_lastname']?></td>
							<td><?php echo $row['contact_email']?></td>
							<td><?php echo $row['contact_position']?></td>
							<td><?php echo $row['contact_subject']?></td>
							<td><?php echo $row['contact_message']?></td>
							<td><center><a class = "btn btn-success" href = "message_reply.php?contact_id=<?php echo $row['contact_id']?>"><i class = "glyphicon glyphicon-check"></i> Reply</a> <a class = "btn btn-danger" onclick = "confirmationDelete(); return false;" href = "del_message.php?contact_id=<?php echo $row['contact_id']?>"><i class = "glyphicon glyphicon-trash"></i> Delete</a></td>
						</tr>
						<?php $i++;?>
						<?php
						}
						?>
					</tbody>
				</table>
                               
                                </div>
                            </div>
                        </div>
							</div>
                            <!-- /. box -->
							
                        </div>
						
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- End Container fluid  -->
			   </div>
                </div>
                <!-- End PAge Content -->
      <!-- footer -->
             <?php include('footer.php');?>
<script>
  $(function () {
    <?php
    include 'connect.php';
    $sql = "SELECT * FROM `transaction` WHERE `status` = 'Check In'";
     $result = $conn->query($sql);
  $i=0;
  $display_appoint=array();
   while($row = $result->fetch_assoc()) { 
    $sql2 = "SELECT * FROM `guest` WHERE guest_id='".$row['guest_id']."'";
    $result2=$conn->query($sql2);
    $row2=$result2->fetch_assoc();
	
    $sql3 = "SELECT * FROM `room` WHERE room_id='".$row['room_id']."'";
    $result3=$conn->query($sql3);
    $row3=$result3->fetch_assoc();
	
	
	$room_type = $row3['room_type'];
	$sql4 = "SELECT * FROM `room_type` WHERE `roomtype_id` = '".$row3['room_type']."'";
    $result4=$conn->query($sql4);						  
	$row4 = $result4->fetch_assoc();
	
    $display_appoint[$i]['firstname']=$row2['firstname'];
	$display_appoint[$i]['lastname']=$row2['lastname'];
    $display_appoint[$i]['checkin']=$row['checkin'];
	$display_appoint[$i]['checkin_time']=$row['checkin_time'];
    $display_appoint[$i]['checkout']=$row['checkout'];
	$display_appoint[$i]['bookcheckout_time']=$row['bookcheckout_time'];
    $display_appoint[$i]['room_type']=$row4['room_type'];
	$display_appoint[$i]['room_no']=$row['room_no'];
    $i++;
}
    ?>

    /* initialize the external events
     -----------------------------------------------------------------*/
    function init_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    init_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()
    $('#calendar').fullCalendar({
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : 'month,agendaWeek,agendaDay'
      },
      buttonText: {
        today: 'today',
        month: 'month',
        week : 'week',
        day  : 'day'
      },
      //Random default events   .date("h:i A", strtotime($value['checkin_time'])).
      events    : [
      <?php foreach ($display_appoint as $value) { ?>
        {
          title          : '<?php echo date("h:i A", strtotime($value['checkin_time']))." - ".$value['firstname']." ".$value['lastname']." - ".$value['room_type']." - Room no. ".$value['room_no']?>',
          start          : new Date(<?php echo date("Y", strtotime($value['checkin'])); ?>,
            <?php echo date("m", strtotime($value['checkin'])); ?>-1,
            <?php echo date("d", strtotime($value['checkin'])); ?>),
          end            : new Date(<?php echo date("Y", strtotime($value['checkout'])); ?>,
            <?php echo date("m", strtotime($value['checkout'])); ?>-1,
            <?php echo date("d", strtotime($value['checkout'])); ?>+1),  
        },
        <?php } ?>/*
        {
          title          : 'Long Event',
          start          : new Date(y, m, d - 5),
          end            : new Date(y, m, d - 2),
          backgroundColor: '#f39c12', //yellow
          borderColor    : '#f39c12' //yellow
        },
        {
          title          : 'Meeting',
          start          : new Date(y, m, d, 10, 30),
          allDay         : false,
          backgroundColor: '#0073b7', //Blue
          borderColor    : '#0073b7' //Blue
        },
        {
          title          : 'Lunch',
          start          : new Date(y, m, d, 12, 0),
          end            : new Date(y, m, d, 14, 0),
          allDay         : false,
          backgroundColor: '#00c0ef', //Info (aqua)
          borderColor    : '#00c0ef' //Info (aqua)
        },
        {
          title          : 'Birthday Party',
          start          : new Date(y, m, d + 1, 19, 0),
          end            : new Date(y, m, d + 1, 22, 30),
          allDay         : false,
          backgroundColor: '#00a65a', //Success (green)
          borderColor    : '#00a65a' //Success (green)
        },
        {
          title          : 'Click for Google',
          start          : new Date(y, m, 28),
          end            : new Date(y, m, 29),
          url            : 'http://google.com/',
          backgroundColor: '#3c8dbc', //Primary (light-blue)
          borderColor    : '#3c8dbc' //Primary (light-blue)
        }*/
      ],
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function (date, allDay) { // this function is called when something is dropped

        // retrieve the dropped element's stored Event Object
        var originalEventObject = $(this).data('eventObject')

        // we need to copy it, so that multiple events don't have a reference to the same object
        var copiedEventObject = $.extend({}, originalEventObject)

        // assign it the date that was reported
        copiedEventObject.start           = date
        copiedEventObject.allDay          = allDay
        copiedEventObject.backgroundColor = $(this).css('background-color')
        copiedEventObject.borderColor     = $(this).css('border-color')

        // render the event on the calendar
        // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
        $('#calendar').fullCalendar('renderEvent', copiedEventObject, true)

        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
          // if so, remove the element from the "Draggable Events" list
          $(this).remove()
        }

      }
    })

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    //Color chooser button
    var colorChooser = $('#color-chooser-btn')
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      //Save color
      currColor = $(this).css('color')
      //Add color effect to button
      $('#add-new-event').css({ 'background-color': currColor, 'border-color': currColor })
    })
    $('#add-new-event').click(function (e) {
      e.preventDefault()
      //Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      //Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.html(val)
      $('#external-events').prepend(event)

      //Add draggable funtionality
      init_events(event)

      //Remove event from text input
      $('#new-event').val('')
    })
  })
</script>
<?php if(!empty($_SESSION['success'])) {  ?>
<div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Success 
    </h1>
    <p><?php echo $_SESSION['success']; ?></p>
    <p>
      <button class="button button--success" data-for="js_success-popup">Close</button>
    </p>
  </div>
</div>
<?php unset($_SESSION["success"]);  
} ?>
<?php if(!empty($_SESSION['error'])) {  ?>
<div class="popup popup--icon -error js_error-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Error 
    </h1>
    <p><?php echo $_SESSION['error']; ?></p>
    <p>
      <button class="button button--error" data-for="js_error-popup">Close</button>
    </p>
  </div>
</div>
<?php unset($_SESSION["error"]);  } ?>
    <script> 
      var addButtonTrigger = function addButtonTrigger(el) {
  el.addEventListener('click', function () {
    var popupEl = document.querySelector('.' + el.dataset.for);
    popupEl.classList.toggle('popup--visible');
  });
};

Array.from(document.querySelectorAll('button[data-for]')).
forEach(addButtonTrigger);
    </script>
</body>

</html>