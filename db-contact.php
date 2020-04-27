<!DOCTYPE html>
<html lang="en">
<?php include 'include/header.php' ?>
<body>
	<!-- Page Preloder -->
	<!-- <div id="preloder">
		<div class="loader"></div>
	</div> -->
	
	<!-- Header section with the nav -->
      <header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 header-top-left">
						<div class="top-info">
							<i class="fa fa-phone"></i>
							(+256) 705 936 481
						</div>
						<div class="top-info">
							<i class="fa fa-envelope"></i>
							info.goldenestates@gmail.com
						</div>
					</div>
				      <div class="col-lg-4 text-lg-right header-top-right">
						<!--<div class="top-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-pinterest"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</div> -->
						<div class="user-panel">
						<!-- the class dropdown-toggle creates the dropdown icon -->
							<div class="dropdown float-left dropdown-toggle" style="color:white">
								<a href="#"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                             <img src="img/team/1.jpg" alt="User Avatar" class=" user-avatar rounded-circle dropdown dropdown-toggle">  
                                        </a>

								<div class="user-menu dropdown-content">

											<a href="#" class="nav-link">
												<i class="fa fa-user">&nbsp;&nbsp;
													My Profile</i>
											</a>
											<!-- <a href="#" class="nav-link">
                                                            <i class="fa fa-map-marker">&nbsp;&nbsp;My Properties List</i>
                                                       </a>
											<a href="#" class="nav-link">
                                                            <i class="fa fa-plus">&nbsp;&nbsp;Add New Property</i>
                                                       </a> -->
											<a href="favorites.php" class="nav-link">
                                                            <i class="fa fa-heart">&nbsp;&nbsp;Favorites</i>
                                                       </a>
											<a href="#" class="nav-link">
                                                            <i class="fa fa-search">&nbsp;&nbsp;Saved Searches</i>
                                                       </a>
											<a href="#" class="nav-link">
                                                            <i class="fa fa-envelope">&nbsp;&nbsp;Inbox</i>
                                                       </a>
                                                       <a href="#" class="nav-link">
                                                            <i class="fa fa-power-off">&nbsp;&nbsp;Logout</i>
                                                       </a>
                                                                 

								</div>
							</div>


                                    
							 
						</div>
					</div>

                         <div class="col-lg-2"></div>
				</div>
			</div>
		</div>

		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 header-top-left">
						<div class="top-info">
							<!-- <img src="img/logoGEP.png" class="logo" alt=""> -->
							
						</div>
						
					</div>
					<div class="col-lg-8 text-lg-right header-top-right">
						<!-- <div class="nav-switch">
							<i class="fa fa-bars" style="color:white"></i>
						</div> -->
					
						<ul class="main-menu" >
							<!-- <li><a href="index.php">Home</a></li> -->
							<li><a href="db-featuredListing1.php">FEATURED LISTING</a></li>
							<li><a href="db-aboutUs.php">ABOUT US</a></li>
							<li><a href="db-contact.php">CONTACT</a></li>
						</ul>
						
						
					</div>
				</div>
			</div>
		</div>
		

	</header>
	<!-- Header section with the nav end -->

	<!-- Hero section -->


	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/partner/bed.jpg">
		<div class="container text-white">
			<h2>Dashboard-Get In Touch</h2>
		</div>
	</section>
	<!--  Page top end -->

	<!-- Breadcrumb -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="index.php"><i class="fa fa-home"></i>Home</a>
			<span><i class="fa fa-angle-right"></i>Contact us</span>
		</div>
	</div>

	<!-- page -->
	<section class="page-section blog-page">
		<div class="container">
			<div id="map-canvas"></div>
			<div class="contact-info-warp">
				<p><i class="fa fa-map-marker"></i>Wampeewo Avenue,Kololo</p>
				<p><i class="fa fa-envelope"></i>info.goldenestates@gmail.com</p>
				<p><i class="fa fa-phone"></i>(+256) 705 936 481</p>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<img src="img/contact.jpg" alt="">
				</div>
				<div class="col-lg-6">
					<div class="contact-right">
						<div class="section-title">
							<h3>Get in touch</h3>
							<p>Browse houses and flats for sale and to rent in your area</p>
						</div>
						<form class="contact-form">
							<div class="row">
								<div class="col-md-6">
									<input type="text" placeholder="Your name">
								</div>
								<div class="col-md-6">
									<input type="text" placeholder="Your email">
								</div>
								<div class="col-md-12">
									<textarea  placeholder="Your message"></textarea>
									<button class="site-btn">SUMMIT NOW</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- page end -->


	<!-- Clients section -->
	<!-- <div class="clients-section">
		<div class="container">
			<div class="clients-slider owl-carousel">
				<a href="#">
					<img src="img/partner/1.png" alt="">
				</a>
				<a href="#">
					<img src="img/partner/2.png" alt="">
				</a>
				<a href="#">
					<img src="img/partner/3.png" alt="">
				</a>
				<a href="#">
					<img src="img/partner/4.png" alt="">
				</a>
				<a href="#">
					<img src="img/partner/5.png" alt="">
				</a>
			</div>
		</div>
	</div> -->
	<!-- Clients section end -->


	<!-- footer -->
		<?php include 'include/foot.php' ?>

	<!-- load for map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
	<script src="js/map.js"></script>


</body>
</html>