<!DOCTYPE html>
<html lang="en">
<?php include 'include/header.php'?>
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
			<h2>Dashboard-Featured Listings 1</h2>
		</div>
	</section>
	<!--  Page top end -->

	<!-- Breadcrumb -->
	<div class="site-breadcrumb">
		<div class="container">
			<a href="dashboard.php"><i class="fa fa-home"></i>Dashboard</a>
			<span><i class="fa fa-angle-right"></i>Featured Listings 1</span>
		</div>
	</div>


	<!-- page -->
	<section class="page-section categories-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<!-- feature -->
					<div class="feature-item">
						<div class="feature-pic set-bg" data-setbg="img/ug/bg-1.jpg">
							<div class="sale-notic">FOR SALE</div>
						</div>
						<div class="feature-text">
							<div class="text-center feature-title">
								<h5>1963 S Crescent Heights Blvd</h5>
								<p><i class="fa fa-map-marker"></i> Los Angeles, CA 90034</p>
							</div>
							<div class="room-info-warp">
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-th-large"></i> 800 Square foot</p>
										<p><i class="fa fa-bed"></i> 10 Bedrooms</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-car"></i> 2 Garages</p>
										<p><i class="fa fa-bath"></i> 6 Bathrooms</p>
									</div>	
								</div>
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-user"></i> Tony Holland</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-clock-o"></i> 1 days ago</p>
									</div>	
								</div>
							</div>
							<a href="#" class="room-price">$1,200,000</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<!-- feature -->
					<div class="feature-item">
						<div class="feature-pic set-bg" data-setbg="img/ug/bg-2.jpg">
							<div class="sale-notic">FOR SALE</div>
						</div>
						<div class="feature-text">
							<div class="text-center feature-title">
								<h5>305 North Palm Drive</h5>
								<p><i class="fa fa-map-marker"></i> Beverly Hills, CA 90210</p>
							</div>
							<div class="room-info-warp">
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-th-large"></i> 1500 Square foot</p>
										<p><i class="fa fa-bed"></i> 16 Bedrooms</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-car"></i> 2 Garages</p>
										<p><i class="fa fa-bath"></i> 8 Bathrooms</p>
									</div>	
								</div>
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-user"></i> Gina Wesley</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-clock-o"></i> 1 days ago</p>
									</div>	
								</div>
							</div>
							<a href="#" class="room-price">$4,500,000</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<!-- feature -->
					<div class="feature-item">
						<div class="feature-pic set-bg" data-setbg="img/ug/bg-3.jpg">
							<div class="rent-notic">FOR Rent</div>
						</div>
						<div class="feature-text">
							<div class="text-center feature-title">
								<h5>305 North Palm Drive</h5>
								<p><i class="fa fa-map-marker"></i> Beverly Hills, CA 90210</p>
							</div>
							<div class="room-info-warp">
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-th-large"></i> 1500 Square foot</p>
										<p><i class="fa fa-bed"></i> 16 Bedrooms</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-car"></i> 2 Garages</p>
										<p><i class="fa fa-bath"></i> 8 Bathrooms</p>
									</div>	
								</div>
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-user"></i> Gina Wesley</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-clock-o"></i> 1 days ago</p>
									</div>	
								</div>
							</div>
							<a href="#" class="room-price">$2,500/month</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<!-- feature -->
					<div class="feature-item">
						<div class="feature-pic set-bg" data-setbg="img/ug/bg-4.jpg">
							<div class="sale-notic">FOR SALE</div>
						</div>
						<div class="feature-text">
							<div class="text-center feature-title">
								<h5>28 Quaker Ridge Road, Manhasset</h5>
								<p><i class="fa fa-map-marker"></i> 28 Quaker Ridge Road, Manhasset</p>
							</div>
							<div class="room-info-warp">
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-th-large"></i> 1200 Square foot</p>
										<p><i class="fa fa-bed"></i> 12 Bedrooms</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-car"></i> 3 Garages</p>
										<p><i class="fa fa-bath"></i> 8 Bathrooms</p>
									</div>	
								</div>
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-user"></i> Sasha Gordon </p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-clock-o"></i> 8 days ago</p>
									</div>	
								</div>
							</div>
							<a href="#" class="room-price">$5,600,000</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<!-- feature -->
					<div class="feature-item">
						<div class="feature-pic set-bg" data-setbg="img/feature/5.jpg">
							<div class="rent-notic">FOR Rent</div>
						</div>
						<div class="feature-text">
							<div class="text-center feature-title">
								<h5>Sofi Berryessa 750 N King Road</h5>
								<p><i class="fa fa-map-marker"></i> San Jose, CA 95133</p>
							</div>
							<div class="room-info-warp">
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-th-large"></i> 500 Square foot</p>
										<p><i class="fa fa-bed"></i> 4 Bedrooms</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-car"></i> 1 Garages</p>
										<p><i class="fa fa-bath"></i> 2 Bathrooms</p>
									</div>	
								</div>
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-user"></i> Gina Wesley</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-clock-o"></i> 8 days ago</p>
									</div>	
								</div>
							</div>
							<a href="#" class="room-price">$1,600/month</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<!-- feature -->
					<div class="feature-item">
						<div class="feature-pic set-bg" data-setbg="img/feature/6.jpg">
							<div class="sale-notic">FOR SALE</div>
						</div>
						<div class="feature-text">
							<div class="text-center feature-title">
								<h5>1203 Orren Street, Northeast</h5>
								<p><i class="fa fa-map-marker"></i> Washington, DC 20002</p>
							</div>
							<div class="room-info-warp">
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-th-large"></i> 700 Square foot</p>
										<p><i class="fa fa-bed"></i> 7 Bedrooms</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-car"></i> 1 Garages</p>
										<p><i class="fa fa-bath"></i> 7 Bathrooms</p>
									</div>	
								</div>
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-user"></i> Sasha Gordon </p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-clock-o"></i> 8 days ago</p>
									</div>	
								</div>
							</div>
							<a href="#" class="room-price">$1,600,000</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<!-- feature -->
					<div class="feature-item">
						<div class="feature-pic set-bg" data-setbg="img/feature/7.jpg">
							<div class="sale-notic">FOR SALE</div>
						</div>
						<div class="feature-text">
							<div class="text-center feature-title">
								<h5>1476 Harvard St NW Unit Ph</h5>
								<p><i class="fa fa-map-marker"></i> Washington, DC 20009</p>
							</div>
							<div class="room-info-warp">
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-th-large"></i> 550 Square foot</p>
										<p><i class="fa fa-bed"></i> 7 Bedrooms</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-car"></i> 1 Garages</p>
										<p><i class="fa fa-bath"></i> 3 Bathrooms</p>
									</div>	
								</div>
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-user"></i> Adam Johnson</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-clock-o"></i> 1 days ago</p>
									</div>	
								</div>
							</div>
							<a href="#" class="room-price">$1,250,000</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<!-- feature -->
					<div class="feature-item">
						<div class="feature-pic set-bg" data-setbg="img/feature/8.jpg">
							<div class="sale-notic">FOR SALE</div>
						</div>
						<div class="feature-text">
							<div class="text-center feature-title">
								<h5>9633 Weathered Oak Ct</h5>
								<p><i class="fa fa-map-marker"></i> Bethesda, MD 208179</p>
							</div>
							<div class="room-info-warp">
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-th-large"></i> 1000 Square foot</p>
										<p><i class="fa fa-bed"></i> 6 Bedrooms</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-car"></i> 2 Garages</p>
										<p><i class="fa fa-bath"></i> 8 Bathrooms</p>
									</div>	
								</div>
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-user"></i> Ann Hathaway</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-clock-o"></i> 1 days ago</p>
									</div>	
								</div>
							</div>
							<a href="#" class="room-price">$1,230,000</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<!-- feature -->
					<div class="feature-item">
						<div class="feature-pic set-bg" data-setbg="img/ug/bg-6.jpg">
							<div class="rent-notic">FOR Rent</div>
						</div>
						<div class="feature-text">
							<div class="text-center feature-title">
								<h5>2529 Marsh Hill Henry Rd Unit Mc</h5>
								<p><i class="fa fa-map-marker"></i> McHenry, MD 21541</p>
							</div>
							<div class="room-info-warp">
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-th-large"></i> 550 Square foot</p>
										<p><i class="fa fa-bed"></i> 4 Bedrooms</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-car"></i> 1 Garages</p>
										<p><i class="fa fa-bath"></i> 2 Bathrooms</p>
									</div>	
								</div>
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-user"></i>  McHenry, MD 21541</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-clock-o"></i> 1 days ago</p>
									</div>	
								</div>
							</div>
							<a href="#" class="room-price">$1,000/month</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<!-- feature -->
					<div class="feature-item">
						<div class="feature-pic set-bg" data-setbg="img/ug/bg-13.jpg">
							<div class="sale-notic">FOR SALE</div>
						</div>
						<div class="feature-text">
							<div class="text-center feature-title">
								<h5>6335 N Magnolia Ave Apt 1S</h5>
								<p><i class="fa fa-map-marker"></i> Chicago, IL 60660</p>
							</div>
							<div class="room-info-warp">
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-th-large"></i> 2200 Square foot</p>
										<p><i class="fa fa-bed"></i> 16 Bedrooms</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-car"></i> 3 Garages</p>
										<p><i class="fa fa-bath"></i> 10 Bathrooms</p>
									</div>	
								</div>
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-user"></i> Tony Holland </p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-clock-o"></i> 8 days ago</p>
									</div>	
								</div>
							</div>
							<a href="#" class="room-price">$1,600,000</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<!-- feature -->
					<div class="feature-item">
						<div class="feature-pic set-bg" data-setbg="img/feature/11.jpg">
							<div class="rent-notic">FOR Rent</div>
						</div>
						<div class="feature-text">
							<div class="text-center feature-title">
								<h5>441 E Maywood Ct</h5>
								<p><i class="fa fa-map-marker"></i> Decatur, IL 62526</p>
							</div>
							<div class="room-info-warp">
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-th-large"></i>   750 Square foot</p>
										<p><i class="fa fa-bed"></i> 5 Bedrooms</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-car"></i> 1 Garages</p>
										<p><i class="fa fa-bath"></i> 3 Bathrooms</p>
									</div>	
								</div>
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-user"></i> Chris Brown</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-clock-o"></i> 8 days ago</p>
									</div>	
								</div>
							</div>
							<a href="#" class="room-price">$1,800/month</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<!-- feature -->
					<div class="feature-item">
						<div class="feature-pic set-bg" data-setbg="img/ug/bg-14.jpg">
							<div class="sale-notic">FOR SALE</div>
						</div>
						<div class="feature-text">
							<div class="text-center feature-title">
								<h5>712 Southland Circle Dr</h5>
								<p><i class="fa fa-map-marker"></i> Tuscola, IL 61953</p>
							</div>
							<div class="room-info-warp">
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-th-large"></i>   200 Square foot</p>
										<p><i class="fa fa-bed"></i> 2 Bedrooms</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-car"></i> 1 Garages</p>
										<p><i class="fa fa-bath"></i> 2 Bathrooms</p>
									</div>	
								</div>
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-user"></i>  Gina Wesley</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-clock-o"></i> 8 days ago</p>
									</div>	
								</div>
							</div>
							<a href="#" class="room-price">$235,000</a>
						</div>
					</div>
				</div>
			</div>
			<div class="site-pagination">
				<span href="db-featuredListing1.php">1</span>
				<a href="db-featuredListing2.php">2</a>
				<a href="db-featuredListing3.php">3</a>
				<!-- <a href="#"><i class="fa fa-angle-right"></i></a> -->
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


	<!-- Footer section -->
		
	<?php include 'include/foot.php'?>

	
	<!-- Footer section end -->
   
</body>
</html>