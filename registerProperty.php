<?php
error_reporting(error_reporting()& ~E_NOTICE);

mysqli_report(MYSQLI_REPORT_ERROR| MYSQLI_REPORT_STRICT);
//create connection
$conn = mysqli_connect('localhost', 'root', '', 'realestate');

$message = "";
if (isset($_POST['submit'])) {

	$ID;	
	$location = $_POST['location'];
	$property_size = $_POST['property_size'];
	$no_of_bedrooms = $_POST['no_of_bedrooms'];
	$no_of_garages = $_POST['no_of_garages'];
	$no_of_bathrooms = $_POST['no_of_bathrooms'];
     $price = $_POST['price'];
     $notic = $_POST['notic'];
	$broker_in_charge = $_POST['broker_in_charge'];


    


	$validate = mysqli_query($conn, "select * from property where ID='$ID' AND location= '$location'");

	if (mysqli_num_rows($validate) == 0) {

		$insertProperty = mysqli_query($conn, "insert into property(Location,PropertySize,NoOfBedrooms,NoOfGarages,NoOfBathrooms,Price,Notic,BrokerInCharge) VALUES('$location','$property_size','$no_of_bedrooms','$no_of_garages','$no_of_bathrooms','$price','$notic','$broker_in_charge')");

		if ($insertProperty) {

			$message = "Property SUCCESSFULLY Registered";
		}
	} else {
		$message = "Property ALREADY REGISTERED";
	}
}


?>
<!DOCTYPE html>
<html lang="en">
<?php include 'include/header.php'?>

<body>
    <div class="row"style='height:100%;width:100%;background:url("img/partner/blue.jpg");background-position:center;background-repeat:no-repeat;background-size:cover;opacity:2;height:100vh;color:white'>

          <div class="col-sm-3"></div>
          <div class="col-sm-6 registerForm" style="margin-top:40px">
          <div class="error-pagewrap">
               <div class="error-page-int">
                 
                    <div class="content-error">
                         <div class="hpanel">
                         <div class="panel-body">
                              <!-- Beginning of the form -->
                         <form action="#" id="register" style="border-radius:5%" method="post" enctype="multipart/form-data">
                            <div class="text-center custom-login">
                                   <div style="height:100px">
                                      <img src="img/logoGEP.png" alt="" class="img responsive" style="height:150px;width:170px">
                                 </div>
                                     <h3 class="text-white">Register Property </h3>
                         
                            </div>
                              <div class="row">
                                   <div class="form-group col-lg-6">
                                        <label for="location">Property Location</label>
                                        
                                        <select class="form-control" id="location" name="location" required>
                                                  <option name="location">***Choose Location...***</option>
                                                  <option name="location" value="Bweyogerere">Bweyogerere</option>
                                                  <option name="location" value="Entebbe">Entebbe</option>
                                                  <option name="location" value="Kawanda">Kawanda</option>
                                                  <option name="location" value="Kisaasi">Kisaasi</option>
                                                  <option name="location" value="Luweero">Luweero</option>
                                                  <option name="location" value="Muyenga">Muyenga</option>
                                                  <option name="location" value="Naalya">Naalya</option>
                                                  <option name="location" value="Namugongo">Namugongo</option>
                                                  <option name="location" value="Ntinda">Ntinda</option>
                                                  <option name="location" value="Wakiso">Wakiso</option>
                                        </select>
                                   </div>
                                   <div class="form-group col-lg-6">
                                        <label>Property Size in <b><u>Square Feet</u></b></label>
                                        <input class="form-control" name="property_size" placeholder="Eg 800 Square foot" required>
                                   </div>
                                   <div class="form-group col-lg-6">
                                        <label>Number Of Bedrooms</label>
                                        <input class="form-control" name="no_of_bedrooms" required>
                                   </div>
                                   <div class="form-group col-lg-6">
                                        <label>Number Of Garages:</label>
                                        <input class="form-control" name="no_of_garages" required>
                                   </div>
                                   <div class="form-group col-lg-6">
                                        <label>Number Of Bathrooms</label>
                                        <input class="form-control" name="no_of_bathrooms" required>
                                   </div>
                                   <div class="form-group col-lg-6">
                                        <label>Price in <b><u>UGX</u></b></label>
                                        <input  class="form-control" name="price">
                                   </div>
                                   <div class="form-group col-lg-6">                                  
                                             <label for="notic">Property To</label>
                                                  <select class="form-control" id="sel1" name="notic">
                                                       <option  name="notic">***Choose ....***</option>
                                                       <option value="Sale" name="notic">Sale</option>
                                                       <option value="Rent" name="notic">Rent</option>
                                                  </select>                                             
                                   </div>
                                      <div class="form-group col-lg-6">                                  
                                             <label for="broker">Broker In Charge</label>
                                                  <select class="form-control" id="broker" name="broker_in_charge">
                                                       <option  name="broker_in_charge">***Choose broker....***</option>
                                                       <option value="Tonny Mawejje" name="broker_in_charge">Tonny Mawejje</option>
                                                       <option value="Sasha Muwonge" name="broker_in_charge">Sasha Muwonge</option>
                                                       <option value="Nicky Zamba" name="broker_in_charge">Nicky Zamba</option>
                                                       <option value="Gina Wesley" name="broker_in_charge">Gina Wesley</option>
                                                  </select>                                             
                                   </div>

                                  <!--<div class="form-group col-lg-6">
                                        Select Image To Upload:
                                        <input class="form-control" type="file" name="fileToUpload" id="fileToUpload">
                                      
                                   </div>-->
                               
                              </div>
                              <div class="text-center" style="padding-top:10px">
                                   <button  type="submit" name="submit" class="btn  registerbtn">Register</button>
                                   <button class="btn cancelbtn">Cancel</button>
                              </div><br>
                              <center>  <p style="color:white">
                                   Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  with <i class="fa fa-heart-o" aria-hidden="true"></i> to GOLDEN Estates </a>
                              </p></center>
                              
                         </form>
                         </div>
                    </div>
                    </div>
                  
               </div>   
          </div>
          </div>
          <div class="col-sm-3"></div>

    </div>

    <style>
    /*making the login form background darker*/
                         #register {
                         background: linear-gradient(
                         rgba(29, 29, 32, 0.5),
                         rgba(69, 69, 71, 0.5),
                         rgba(69, 69, 71, 0.5)
                         );
                         /* background-color: #ff79c0;  */
                         background-position: center;
                         background-repeat: no-repeat;
                         background-size: cover;
                         opacity: 2;
                         padding:10px;
                         }
    </style>

   
</body>
</html>