<!DOCTYPE html>
<html lang="en">
  <head>
    <title>De La Salle | Hotel School</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="images/dlsau_logo.png">
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">   
    <link rel="stylesheet" href="css/owl.carousel.min.css">	
    <link rel="stylesheet" href="css/owl.theme.default.min.css">	
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">	
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
	
	<link rel="stylesheet" href="css/formstyle.css">
	<link rel="stylesheet" href="css/slider.css">
	<link rel="stylesheet" href="css/bookingdetails.css">
  </head>
  <body>
		<div class="wrap">
			<div class="container">
				<div class="row justify-content-between">
						<div class="col d-flex align-items-center">
							<p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="#">+(02) 330 9129</a> or <span class="mailus">email us:</span> <a href="#">dlsaulasallianhotel@gmail.com</a></p>
						</div>
						<div class="col d-flex justify-content-end">
							<div class="social-media">
				    		<p class="mb-0 d-flex">
				    			<a href="https://www.facebook.com/hoteldelasalle" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
				    			<!--<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
				    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>-->
				    		</p>
			        </div>
						</div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="index.php">De La Salle <span> Hotel School</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="#" class="nav-link" onclick="myFunctionHome()">Home</a></li>
	        	<li class="nav-item active"><a href="book_room.php?date=<?php echo $_REQUEST['date']?>&max=<?php echo $_REQUEST['max']?>" class="nav-link" onclick="myFunctionRoom()">Room</a></li>	
	        	<li class="nav-item"><a href="#" class="nav-link" onclick="myFunctionServices()">Services</a></li>
	            <li class="nav-item"><a href="#" class="nav-link" onclick="myFunctionAbout()">About</a></li>
	          <!--<li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>-->
	          <li class="nav-item"><a href="#" class="nav-link" onclick="myFunctionContact()">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/mainbgrooms.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Reservation <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Make A Reservation</h1>
          </div>
        </div>
      </div>
    </section>
	    <?php 
					require_once 'admin/connect.php';
					$query = $conn->query("SELECT * FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'") or die(mysql_error());
					
					while($fetch = $query->fetch_array()){
					$room_type = $fetch['room_type'];
					$query2 = $conn->query("SELECT * FROM `room_type` WHERE `roomtype_id` = '".$fetch['room_type']."'") or die(mysql_error());
					$fetch2 = $query2->fetch_array();
				?>
	<section class="form-v4 bg-light ftco-no-pt ftco-no-pb">
	 <div class="d-md-flex"> 
	 
	<div class="page-content">
		<div class="form-v4-content">
			
      <div class="form-left"> 
        <table>
          <tr> 
            <th><center>
                <h2>&nbsp;Your Booking Details</h2>
              </center></th>
          </tr>
          <tr> 
            <td> <label class="text-1" style="display: block; float: left; margin: auto;">&nbsp;Purpose 
              of Stay: <span id="resultstay" name="purposeofstay"></span></label> 
              <label class="text-1" style="margin-right: 245px; display: block; float: right; margin: atuo;">&nbsp;Position: 
              <span  style="display: block; float: right; margin: atuo;" id="resultposition" name="position"></span></label> 
              <br/> <label class="text-1" style="margin-right: 200px; display: block; float: left;">&nbsp;Adults: 
              <span id="resultadults" name="adults"></span></label> <label class="text-1" style="margin-right: 285px; display: block; float: right; margin: atuo;">&nbsp;Children: 
              <span style="display: block; float: right; margin: atuo;" id="resultchildren" name="children"></span></label> </br> 
              <label class="text-1" style="margin-right: 200px; display: block; float: left;">&nbsp;Checkin: 
              <span type="date" id="resultcheckin" name="check_in"></span></label> 
              <label class="text-1" style="margin-right: 210px; display: block; float: right; margin: atuo;">&nbsp;Checkout: 
              <span type="date" style="display: block; float: right; margin: atuo;" id="resultcheckout" name="check_out"></span></label> 
              <!--<label class="text-1" style="margin-right: 200px; display: block; float: left;">&nbsp;Checkin 
              Time: <span type="time" id="resultcheckintime" name="check_intime"></span></label> 
              <label class="text-1" style="margin-right: 210px; display: block; float: right; margin: atuo;">&nbsp;Checkout 
              Time: <span type="time" style="display: block; float: right; margin: atuo;" id="resultcheckouttime" name="check_outtime"></span></label> -->
            </td>
          </tr>
        </table>
        <br/>
        <table>
          <tr> 
            <th><center>
                <h2>&nbsp;You Selected room/venue</h2>
              </center></th>
          </tr>
          <tr> 
            <td> <center>
                <p class="star mb-0" style="font-size: 15px; letter-spacing: 15px;"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
                <h3 style = "color:#fff;"><?php echo $fetch2['room_type']?></h3>
                <a style = "color:#fff;"><?php echo "Php. ".$fetch['price']."";?> 
                per night</a> 
              </center>
              <div class="slideshow-container"> 
                <div class="mySlides"> 
                  <div class="numbertext">1 / 4</div>
                  <img src = "photo/<?php echo $fetch['photo']?>" style="height:705px; width:100%"> 
                  <div class="text">Main Preview</div>
                </div>
                <div class="mySlides"> 
                  <div class="numbertext">2 / 4</div>
                  <img src = "photo/<?php echo $fetch['photo2']?>" style="height:705px; width:100%"> 
                  <div class="text">Preview 1</div>
                </div>
                <div class="mySlides"> 
                  <div class="numbertext">3 / 4</div>
                  <img src = "photo/<?php echo $fetch['photo3']?>" style="height:705px; width:100%"> 
                  <div class="text">Preview 2</div>
                </div>
                <div class="mySlides"> 
                  <div class="numbertext">4 / 4</div>
                  <img src = "photo/<?php echo $fetch['photo4']?>" style="height:705px; width:100%"> 
                  <div class="text">Preview 3</div>
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a> <a class="next" onclick="plusSlides(1)">&#10095;</a> 
              </div>
              <br> <div style="text-align:center"> <span class="dot" onclick="currentSlide(1)"></span> 
                <span class="dot" onclick="currentSlide(2)"></span> <span class="dot" onclick="currentSlide(3)"></span> 
                <span class="dot" onclick="currentSlide(4)"></span> </div>
              <!-- <center>
              <h3 style = "color:#fff;"><?phpecho $fetch['room_type']?></h3>
              <a style = "color:#fff;"><?phpecho "Php. ".$fetch['price']."";?> per night</a> 
			  
           
			<img class="gallery-hightlight" src = "photo/<?phpecho $fetch['photo']?>" height = "400px" width = "80%">
			</center>
				
              <div class="room-gallery"> 
                <div class="room-preview"> 
				<img src="photo/<?phpecho $fetch['photo']?>"class="room-active" alt="" height = "100px"/> 
                  <img src="photo/<?phpecho $fetch['photo1']?>" alt="" /> 
				  <img src="photo/<?phpecho $fetch['photo2']?>" alt="" /> 
                  <img src="photo/<?phpecho $fetch['photo3']?>" alt="" /> 
				  <img src="photo/<?phpecho $fetch['photo4']?>" alt="" /> 
                </div>
              </div>-->
            </td>
          </tr>
        </table></br>
        <!-- <table>
          <tr> 
            <th><center>
                <h2>&nbsp;De La Salle Hotel Policies</h2>
              </center></th>
          </tr>
          <tr> 
            <td> <div style = "float:left; margin-left:10px;"> 
                <label class="text-1">-Check in time is 2PM and Check out is I2NN. 
                For early check - in and/or late check out, rooms are subject 
                to availability or additional fee may apply.</label>
                <label class="text-1">-30% and 50% discounts are given to DLSAU 
                Students (Enrolled ONLY) and Personnel, respectively.</label>
                <label class="text-1">-Please pay on or before the booked date. 
                A deposit equivalent to 50% of the total amount of the billing. 
                shall be required to confirm all bookings.</label>
                <label class="text-1" >-Room Cancellation: Hotel De La Salle charges 
                a cancellation fee of P400.00.</label>
                <label class="text-1">-Smoking inside the room is NOT allowed.</label>
                <label class="text-1">-Deadly Weapon, Liquor and illegal drugs 
                are STRICTLY PROHIBITED.</label>
                <label class="text-1">-Please be considerate of other guests; 
                please do not make excessive noise.</label>
                <label class="text-1">-Cooking inside the Hotel rooms is STRICLY 
                PROHIBITED.</label>
                <label class="text-1">-The management is not liable for any loss 
                of your valuables. Please secure them properly.</label>
                <label class="text-1">-When leaving your room, make sure your 
                room is locked and key deposited at the front desk.</label>
                <label class="text-1">-The management reserves the right to refuse 
                entry/stay to individuals violating Hotel policies.</label>
              </div></td>
          </tr>
        </table>-->
      </div>
			  <?php
					    $sql = "SELECT * FROM `room` WHERE `room_id` = '$_REQUEST[room_id]'";
                        $result = $conn->query($sql);
						$row = $result->fetch_assoc();
				?>	
			
      <form class="form-detail" action="add_query_reserves.php?room_id=<?php echo $row['room_id']?>" method="POST" id="myform">
        <h2>RESERVATION FORM</h2>
        <div class="form-group"> 
          <div class="form-row form-row-1"> 
            <label>Purpose Of Stay</label>
            <input readonly id="purpose" name = "purposeofstay" placeholder="Purpose Of Stay" class="input-text" style="background-color:#ededed;" required>
          </div>
          <div class="form-row form-row-1"> 
            <label>Position</label>
            <input readonly id="position" name = "position" placeholder="Position" class="input-text" style="background-color:#ededed;" required>
          </div>
        </div>
        <div class="form-group"> 
          <div class="form-row form-row-1"> 
            <label>Adults</label>
            <input readonly id="adults" name = "adults" placeholder="Adults" class="input-text" style="background-color:#ededed;" required>
          </div>
          <div class="form-row form-row-1"> 
            <label>Children</label>
            <input readonly id="children" name = "children" placeholder="0" class="input-text" style="background-color:#ededed;" required>
          </div>
        </div>
        <div class="form-group"> 
          <div class="form-row form-row-1"> 
            <label>Check In</label>
            <input readonly id="checkin" name = "check_in" class="input-text" style="background-color:#ededed;" required>
          </div>
          <div class="form-row form-row-1"> 
            <label>Check Out</label>
            <input readonly id="checkout" name = "check_out" class="input-text" style="background-color:#ededed;" required>
          </div>
        </div>
        <!--<div class="form-group"> 
          <div class="form-row form-row-1"> 
            <label>Check In Time</label>
            <input readonly id="checkintime" name = "checkintime" class="input-text" style="background-color:#ededed;" required>
          </div>
          <div class="form-row form-row-1"> 
            <label>Check Out Time</label>
            <input readonly id="checkouttime" name = "checkouttime" class="input-text" style="background-color:#ededed;" required>
          </div>
        </div>-->
        <div class="form-group"> 
          <div class="form-row form-row-1"> 
            <label>First Name</label>
            <input type="text" name="firstname" id="first_name" onkeyup="myFunctionFN()" placeholder="First Name.." class="input-text" onkeydown="return /[a-z]/i.test(event.key)" required>
          </div>
          <div class="form-row form-row-1"> 
            <label>Last Name</label>
            <input type="text" name="lastname" id="last_name" onkeyup="myFunctionLN()" placeholder="Last Name.." class="input-text" onkeydown="return /[a-z ]/i.test(event.key)" required>
          </div>
        </div>
        <div class="form-row"> 
          <label>Your Email</label>
          <input type="text" name="email_address" id="email_address" placeholder="Email.." class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
        </div>
        <div class="form-row"> 
          <label>Address</label>
          <input type="text" name="address" id="address" placeholder="Address.." class="input-text" required>
        </div>
        <div class="form-row"> 
          <label>Mobile Number</label>
          <input type="text" name="contact_no" id="contact_no" placeholder="Mobile Number.." class="input-text" onkeypress="return isNumberKey(event)" minlength="11" maxlength="11" pattern="^[0][9][0-9]*$" required>
        </div>
        <div id="myDIV" onscroll="myFunction()" style="width:100%; height:150px; background-color:#ebedf3; overflow:auto; border: 1px solid #ddd; border-radius:5px"> 
          <div id="content" style="margin-left:20px; color:black;"> 
            <center>
              <h2>&nbsp;De La Salle Hotel Policies</h2>
            </center>
            <p><span style="font-size: medium;">-Check in time is 2PM and Check 
              out is 12NN. For early check - in and/or late check out, rooms are 
              subject to availability or additional fee may apply.</span></p>
            <p><span style="font-size: medium;">-30% and 50% discounts are given 
              to DLSAU Students (Enrolled ONLY) and Personnel, respectively.</span></p>
            <p><span style="font-size: medium;">-Please pay on or before the booked 
              date. A deposit equivalent to 50% of the total amount of the billing. 
              Shall be required to confirm all bookings.</span></p>
            <p><span style="font-size: medium;">-Room Cancellation: Hotel De La 
              Salle charges a cancellation fee of P400.00.</span></p>
            <p><span style="font-size: medium;">-Smoking inside the room is NOT 
              allowed.</span></p>
            <p><span style="font-size: medium;">-Deadly Weapon, Liquor and illegal 
              drugs are STRICTLY PROHIBITED.</span></p>
            <p><span style="font-size: medium;">-Please be considerate of other 
              guests; please do not make excessive noise.</span></p>
            <p><span style="font-size: medium;">-Cooking inside the Hotel rooms 
              is STRICLY PROHIBITED.</span></p>
            <p><span style="font-size: medium;">-The management is not liable 
              for any loss of your valuables. Please secure them properly.</span></p>
            <p><span style="font-size: medium;">-When leaving your room, make 
              sure your room is locked and key deposited at the front desk.</span></p>
            <p><span style="font-size: medium;">-The management reserves the right 
              to refuse entry/stay to individuals violating Hotel policies.</span></p>
            <div class="form-checkbox"> 
              <label> 
              <input type="checkbox" id="checkbox" name="checkbox" required >
              <span class="checkmark"></span> </label>
              <p>I agree to the terms and agreement.</p>
            </div>
          </div>
        </div>
        <!--<p id="demo"></p>-->
        <center>
          <input type="submit" id="add_quest" name = "add_guest" class="register" value="Book Now" >
          <!--<button type="submit" class="register"><a href="book_room.php" style="color:white;">Cancel</a></button>-->
        </center>
      </form>
		</div>
	</div>
	</div>
	
		</section>
		  	<?php
		}
		?>
   <script>
     var guestpurpose = document.getElementById("resultstay").innerHTML=localStorage.getItem("purpose");
	 var guestposition = document.getElementById("resultposition").innerHTML=localStorage.getItem("position");
	 var guestadults = document.getElementById("resultadults").innerHTML=localStorage.getItem("adults");
	 var guestchildren = document.getElementById("resultchildren").innerHTML=localStorage.getItem("children");
	 
	 var guestcheckin = document.getElementById("resultcheckin").innerHTML=localStorage.getItem("checkin");
	// var guestcheckintime = document.getElementById("resultcheckintime").innerHTML=localStorage.getItem("checkintime");
	  
	 var guestcheckout = document.getElementById("resultcheckout").innerHTML=localStorage.getItem("checkout");
	// var guestcheckouttime = document.getElementById("resultcheckouttime").innerHTML=localStorage.getItem("checkouttime");
	  
     document.getElementById("purpose").value = guestpurpose;
	 document.getElementById("position").value = guestposition;
	 document.getElementById("adults").value = guestadults;
	 document.getElementById("children").value = guestchildren;
	 
	 document.getElementById("checkin").value = guestcheckin;
	 //document.getElementById("checkintime").value = guestcheckintime;
	 
	 document.getElementById("checkout").value = guestcheckout;
	 //document.getElementById("checkouttime").value = guestcheckouttime;
</script>

<script>
function myFunctionFN() {
  var firstname = document.getElementById("first_name");
  firstname.value = firstname.value.charAt(0).toUpperCase() + firstname.value.slice(1);
}
</script>

<script>
function myFunctionLN() {
  var lastname = document.getElementById("last_name");
  lastname.value = lastname.value.charAt(0).toUpperCase() + lastname.value.slice(1);
}
</script>

    <footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-3 mb-md-0 mb-4">
						<h2 class="footer-heading"><a href="index.php" class="logo">De La Salle Hotel School</a></h2>
						<p>Lasallian Hotel is open for all occasions. -Weddings -Birthdays -Christening -Student Activities -Family Events - Reunion -Meetings/Seminars.</p>
						<a href="about.php">Read more <span class="fa fa-chevron-right" style="font-size: 11px;"></span></a>
					</div>
					<div class="col-md-6 col-lg-3 mb-md-0 mb-4">
						<h2 class="footer-heading">Services</h2>
						<ul class="list-unstyled">
              <li><a href="contact.php" class="py-1 d-block">Map Direction</a></li>
              <li><a href="services.php" class="py-1 d-block">Accomodation Services</a></li>
              <li><a href="about.php" class="py-1 d-block">Great Experience</a></li>
              <!--<li><a href="#" class="py-1 d-block">Perfect central location</a></li>-->
            </ul>
					</div>
					<div class="col-md-6 col-lg-3 mb-md-0 mb-4">
						<h2 class="footer-heading">DLSAU Tag </h2>
						<div class="tagcloud">
	            <a href="https://www.dlsau.edu.ph/" class="tag-cloud-link">De La Salle Araneta University</a>
	            <a href="http://www.saliknetafarm.com.ph/" class="tag-cloud-link">Salikneta Farm</a>
	            <a href="https://www.facebook.com/dlsaudormitory/" class="tag-cloud-link">DLSAU Dorm</a>
				<a href="http://www.dlsau.edu.ph/veterinary-teaching-hospital/" class="tag-cloud-link">Veterinary Teaching Hospital</a>
				<a href="https://www.facebook.com/hoteldelasalle/" class="tag-cloud-link">DLSAU Hotel</a>
	          </div>
					</div>
					<div class="col-md-6 col-lg-3 mb-md-0 mb-4">
						<!--<h2 class="footer-heading">Subcribe</h2>
						<form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control rounded-left" placeholder="Enter email address">
                <button type="submit" class="form-control submit rounded-right"><span class="sr-only">Submit</span><i class="fa fa-paper-plane"></i></button>
              </div>-->
            </form>
            <h2 class="footer-heading">Follow us</h2>
            <ul class="ftco-footer-social p-0">
              <!--<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="fa fa-twitter"></span></a></li>-->
              <li class="ftco-animate"><a href="https://www.facebook.com/hoteldelasalle" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="fa fa-facebook"></span></a></li>
              <!--<li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="fa fa-instagram"></span></a></li>-->
            </ul>
					</div>
				</div>
			</div>
			<div class="w-100 mt-5 border-top py-5">
				<div class="container">
					<div class="row">
	          <div class="col-md-6 col-lg-8">

	            <p class="copyright mb-0">
	  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <!--<i class="fa fa-heart" aria-hidden="true"></i>--> by <a href="https://www.dlsau.edu.ph/" target="_blank">De La Salle Araneta</a>
	  </p>
	          </div>
	          <div class="col-md-6 col-lg-4 text-md-right">
	          	<p class="mb-0 list-unstyled">
	          		<!--<a class="mr-md-3" href="#">Terms</a>
	          		<a class="mr-md-3" href="#">Privacy</a>
	          		<a class="mr-md-3" href="#">Compliances</a>-->
	          	</p>
	          </div>
	        </div>
				</div>
			</div>
		</footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<script language=Javascript>
    
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
   
   </script>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script src = "js/jquery.js"></script>
<script src = "js/bootstrap.js"></script>
<script src="js/confirm_leave.js"></script>
 <script src="js/gallery.js"></script>
    <script src="js/modal.js"></script>
  </body>
</html>