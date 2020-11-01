<?php

//create connection
$conn = mysqli_connect('localhost', 'root', '', 'realestate');

$message = "";
if (isset($_POST['submit'])) {

	$ID;
	$notic = $_POST['notic'];
	$location = $_POST['location'];
	$property_size = $_POST['property_size'];
	$no_of_bedrooms = $_POST['no_of_bedrooms'];
	$no_of_garages = $_POST['no_of_garages'];
	$no_of_bathrooms = $_POST['no_of_bathrooms'];
	$price = $_POST['price'];
	$broker_in_charge = $_POST['broker_in_charge'];



	$validate = mysqli_query($conn, "select * from favorites where propertyID='$ID' OR location= '$location'");

	if (mysqli_num_rows($validate) == 0) {

		$insert_fav = mysqli_query($conn, "insert into favorites(ID,notic,location,property_size,no_of_bedrooms,no_of_garages,no_of_bathrooms,price,broker_in_charge) VALUES('$notic','$location','$property_size','$no_of_bedrooms','$no_of_garages','$no_of_bathrooms','$price','$broker_in_charge')");

		if ($insert_fav) {

			$message = "COURSE SUCCESSFULLY SUMITTED";
		}
	} else {
		$message = "COUSRE ALREADY REGISTERED";
	}
}


?>

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
								<a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

						<ul class="main-menu">
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


	<!-- page-->
	<section class="page-section categories-page">
		<div class="container">
			<div class="row">
	               <div class="col-sm-12">
					<!-- feature -->
					<div class="panel panel-default feature-item">
                              <?php
                                   $conn = mysqli_connect('localhost','root','','realestate');
                                   $no = 0;
                                   $select = mysqli_query($conn,"select * from property");
                                   while ($array= mysqli_fetch_array($select)){
                                       
                                   ?>
                              <div class="panel-body">
                                   <!-- the image -->
                                   <div class=" feature-pic set-bg" data-setbg="img/ug/bg-1.jpg">
                                             <!--the notic  -->
                                        <div class="sale-notic" style="background-color:#df0808"><?php echo $array['Notic']?></div>

                                   </div>

                                   <!-- Location and others -->
                                   <div class="feature-text">
							<div class="text-center feature-title">
                                        <!-- location -->
								<h5><a href="https://www.google.com/maps/d/edit?mid=1_eaBTJt8HsI1-sdiZ5eHTOW-zBMbU0yh&usp=sharing"><i class="fa fa-map-marker"></i>&nbsp;<?php echo $array['Location']?></a></h5>
                                   </div>
                                   
                                   <!-- property description -->
							<div class="room-info-warp">
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-th-large"></i> <?php echo $array['PropertySize']?></p>
										<p><i class="fa fa-bed"></i> <?php echo $array['NoOfBedrooms']?>&nbsp;Bedroom(s)</p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-car"></i>  <?php echo $array['NoOfGarages']?>&nbsp;Garage(s)</p>
										<p><i class="fa fa-bath"></i> <?php echo $array['NoOfBathrooms']?>&nbsp;Bathroom(s)</p>
									</div>
                                        </div>
                                        <!-- broker in charge -->
								<div class="room-info">
									<div class="rf-left">
										<p><i class="fa fa-user"></i> <?php echo $array['BrokerInCharge']?></p>
									</div>
									<div class="rf-right">
										<p><i class="fa fa-clock-o"></i> 1 days ago</p>
									</div>
								</div>
                                   </div>
                                   <!-- price -->
							<a href="#" class="room-price"><?php echo $array['Price']?>&nbsp;UGX</a>
                              </div>
                              <?php
                                   }
                                 ?>  
                              </div>
                               <a type="button" href="bweyogerereHouse.php" >More details</a>
                         </div>		
					
				</div><br>





               <!-- the hard coded ones start -->
				
		
			
						

               </div> <br>
               <!-- Pagination begins -->
			<div class="site-pagination">
				<span href="db-featuredListing1.php">1</span>
				<a href="db-featuredListing2.php">2</a>
				<a href="db-featuredListing3.php">3</a>
				<!-- <a href="#"><i class="fa fa-angle-right"></i></a> -->
               </div>
               <!-- pagination ends -->
		</div>
	</section>
	<!-- page end -->





	<!-- Footer section -->

	<?php include 'include/foot.php' ?>


	<!-- Footer section end -->

</body>

</html>