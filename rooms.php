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
	 <link rel="stylesheet" href="css/stylemodal.css">
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
	    	<a class="navbar-brand" href="index.php">De La Salle <span>Hotel School</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	        <li class="nav-item active"><a href="rooms.php" class="nav-link">Room</a></li>	
	        	<li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>	
	          <!--<li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>-->
			  <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
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
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Room <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Hotel Room</h1>
          </div>
        </div>
      </div>
    </section>	
    <section class="ftco-section bg-light ftco-no-pt ftco-no-pb">
			<div class="container-fluid px-md-0">
				<div class="row no-gutters">
    			
 	<?php
					require_once 'admin/connect.php';
					$query3 = $conn->query("SELECT * FROM `room` WHERE `room_type`") or die(mysql_error());
					
					
					$query = $conn->query("SELECT * FROM `room` ORDER BY `room_id` ASC") or die(mysql_error());
					
					$query4 = $conn->query("SELECT * FROM `room` WHERE `room_id`") or die(mysql_error());
					while($fetch = $query->fetch_array()){
					$fetch3 = $query3->fetch_array();
					$fetch4 = $query4->fetch_array();
					$room_type = $fetch3['room_type'];
					$query2 = $conn->query("SELECT * FROM `room_type` WHERE `roomtype_id` = '".$fetch3['room_type']."'") or die(mysql_error());
					$fetch2 = $query2->fetch_array();
					
					//$query5 = $conn->query("SELECT * FROM `transaction` WHERE `room_id` = '".$fetch4['room_id']."' && `status` = 'Pending Reservation'") or die(mysqli_error());
	                //$row = $query5->fetch_array();
					//$query6 = $conn->query("SELECT * FROM `transaction` WHERE `room_id` = '".$fetch4['room_id']."' && `status` = 'Pending Check In'") or die(mysqli_error());
	                //$row2 = $query6->fetch_array();
				?>
							
         
    <div class="col-lg-6"> 
      <div class="room-wrap d-md-flex"> <a class="img"><img src = "photo/<?php echo $fetch['photo']?>" height = "100%" width = "100%"/> 
        </a> 
        <div class="half left-arrow d-flex align-items-center"> 
          <div class="text p-4 p-xl-5 text-center"> 
            <p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
            <p class="mb-0"><span class="price mr-1"><?php echo "Price: Php. ".$fetch['price'].".00"?></span> 
              <span class="per">per night</span></p>
            <h3 class="mb-3"><a href=""><?php echo $fetch2['room_type']?></a></h3>
            <ul class="list-accomodation">
              <li><span>Max:</span> <?php echo $fetch['max']?> Persons</li>
              <li><span>Bed:</span> <?php echo $fetch['bed']?></li>
            </ul>
            <?php 
	      $id = $fetch['room_id'];
		echo '<p class="pt-1"><a href="room_gallery.php?room_id='.$id.'" class="btn-custom px-3 py-2">View 
              Room Details<span class="icon-long-arrow-right"></span></a></p>';
		
		?>
          </div>
        </div>
      </div>
    </div>
    
				<?php
					}
				?>
    </div>
    		</div>
			</div>
		</section>
	 

		 
		 
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
            <h2 class="footer-heading mt-5">Follow us</h2>
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
	  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <!--<i class="fa fa-heart" aria-hidden="true"></i>--> by <a href="https://www.dlsau.edu.ph/" target="_blank">De La Salle Araneta University</a>
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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>


    
  </body>
</html>