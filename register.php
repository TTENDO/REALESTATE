<?php

error_reporting(E_ALL ^ E_NOTICE); // DEALING WITH THE ERRORS OF NOTICE

// connect to the server
$conn = mysqli_connect("localhost", "root", "", "realestate");
// check connection
if (!$conn) {
     die("ERROR: Could not connect : " . mysqli_error($conn));
}

mysqli_select_db($conn, "realestate");

//VALIDATION OF FIELDS TO CHECK WHETHER THEY ARE EMPTY


// define variables and set to empty values

$fnameErr = $lnameErr =  $emailErr = $phoneErr = $passwordErr = "";
$fname = $lname = $email = $phone = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     // defining the test_input function which strips user input of slashes and unnecessary characters

     function test_input($data)
     {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return ($data);
     }


     if (empty($_POST["fname"])) {
          $fnameErr = "* Please enter your first name *";
     } else {
          $fname = test_input($_POST["fname"]);
     }

     if (empty($_POST["lname"])) {
          $lnameErr = "Please enter your last name";
     } else {
          $lname = test_input($_POST["lname"]);
     }

     if (empty($_POST["email"])) {
          $emailErr = "Please enter your email";
     } else {
          $email = test_input($_POST["email"]);
     }

     if (empty($_POST["phone"])) {
          $phoneErr = "Please enter phone number";
     } else {
          $phone = test_input($_POST["phone"]);
     }

     if (empty($_POST["password"])) {
          $passwordErr = "Please enter password";
     } else {
          $password = test_input($_POST["password"]);
     }



     $sql = "insert into property_seekers(firstname,lastname,emailAddress,phoneNumber,password) VALUES('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[phone]','$_POST[password]')";
     if (!mysqli_query($conn, $sql)) {
          die('Error: ' . mysqli_error($conn));
     }
}
//END OF VALIDATION OF FIELDS


// $sql = "insert into property_seekers(firstname,lastname,emailAddress,phoneNumber,password) VALUES('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[phone]','$_POST[password]')";


// if (!mysqli_query($conn, $sql)) {
//      die('Error: ' . mysqli_error($conn));
// }



// if it has inserted successfully, head to the login page
// if ($sql) {
//      header("location:login.php");
// }



mysqli_close($conn);

// $sql = "INSERT INTO property_seekers()"
// if (isset($_POST['submit'])) {
//      // variable name = name from form
//      $fname = $_POST['fname'];
//      $lname = $_POST['lname'];
//      $email = $_POST['email'];
//      $phone = $_POST['phone'];
//      $password = $_POST['password'];
//      // $spass = md5($password); //decrypting the password

//      // $validate = mysqli_query($conn, "select * from property_seekers where email='$email' OR phone='$phone'");

//      // if (mysqli_num_rows($validate) == 0) {


//      // }

//      //inserting into the database
//      $insert_propertySeeker = mysqli_query($conn, "insert into property_seekers(fname,lname,email,phone,password) VALUES('$fname','$lname','$email','$phone','$password')");

//      if ($insert_propertySeeker) {
//           echo "Details of" . $fname . "have been registered";
//      }
// }
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'include/header.php' ?>

<body>
     <div class="row" style='height:100%;width:100%;background:url("img/partner/blue.jpg");background-position:center;background-repeat:no-repeat;background-size:cover;opacity:2;height:100vh;color:white'>

          <div class="col-sm-3"></div>
          <div class="col-sm-6 registerForm" style="margin-top:60px">
               <div class="error-pagewrap">
                    <div class="error-page-int">

                         <div class="content-error">
                              <div class="hpanel">
                                   <div class="panel-body">
                                        <!-- Form start -->
                                        <form method="post" id="register" style="border-radius:5%" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
                                             <div class="text-center custom-login">
                                                  <div style="height:100px">
                                                       <img src="img/logoGEP.png" alt="" class="img responsive" style="height:150px;width:170px">
                                                  </div>

                                                  <h3 class="text-white">Register to find Property</h3>

                                             </div>
                                             <div class="row">
                                                  <div class="form-group col-lg-6">
                                                       <label>First name</label>
                                                       <input class="form-control" name="fname">
                                                       <span class="error"> <?php echo $fnameErr ?></span>
                                                  </div>
                                                  <div class="form-group col-lg-6">
                                                       <label>Last name</label>
                                                       <input class="form-control" name="lname">
                                                       <span class="error"> <?php echo $lnameErr ?></span>
                                                  </div>

                                                  <div class="form-group col-lg-6">
                                                       <label>Email Address</label>
                                                       <input class="form-control" name="email">
                                                       <span class="error"> <?php echo $emailErr ?></span>
                                                  </div>
                                                  <div class="form-group col-lg-6">
                                                       <label>Phone number: <i style="font-size:15px;color:#30caa0">Eg 256705936481</i></label>
                                                       <input class="form-control" name="phone">
                                                       <span class="error"> <?php echo $phoneErr ?></span>
                                                  </div>

                                                  <div class="form-group col-lg-6">
                                                       <label>Password</label>
                                                       <input type="password" class="form-control" name="password" id="password1">
                                                       <span class="error"> <?php echo $passwordErr ?></span>
                                                  </div>
                                                  <div class="form-group col-lg-6">
                                                       <label>Repeat Password</label>
                                                       <input type="password" class="form-control" id="password2">
                                                  </div>
                                                  <div class="checkbox col-lg-12">
                                                       <input type="checkbox" class="i-checks" checked> Sign up for our newsletter
                                                  </div>
                                             </div>
                                             <div class="text-center" style="padding-top:10px">
                                                  <input class=" button btn  registerbtn" name="submit" type="submit" value="Register">
                                                  <button class="btn cancelbtn">Cancel</button>
                                             </div><br>

                                             <center>
                                                  <div>
                                                       Already have an account? <a href="login.php">Log in</a>
                                                  </div>
                                             </center><br>
                                             <center>
                                                  <p style="color:white">
                                                       Copyright &copy;<script>
                                                            document.write(new Date().getFullYear());
                                                       </script> All rights reserved with <i class="fa fa-heart-o" aria-hidden="true"></i> to GOLDEN Estates </a>
                                                  </p>
                                             </center>

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
          /*Changing the color of the links */
          div>a {
               color: #30caa0;
          }

          /*making the login form background darker*/
          #register {
               background: linear-gradient(rgba(29, 29, 32, 0.5),
                         rgba(69, 69, 71, 0.9),
                         rgba(69, 69, 71, 0.9));
               /* background-color: #ff79c0;  */
               background-position: center;
               background-repeat: no-repeat;
               background-size: cover;
               opacity: 2;
               padding: 10px;
          }
     </style>

     <script>
          let check = () => {
               var Password1 = document.getElementById("password1")
               var Password2 = document.getElementById("password2")
               var Firstname = document.getElementById("fname")
               var Secondname = document.getElementById("lname")
               var EmailAddress = document.getElementById("email")
               var PhoneNumber = document.getElementById("phone")
               if (Password1.value == '') {
                    alert(`Password should not be empty`);
                    Password1.style.border = '2px solid red'
                    return false
               }
               if (Password1.value != Password2.value) {
                    alert('Passwords should match');
                    Password2.style.border = '2px solid blue'
               }
               if (Password1.value !== '' && Password2.value !== '' && Firstname.value !== '' &&
                    Secondname.value !== '' && EmailAddress.value !== '' && PhoneNumber.value !== '') {
                    <?php
                    header("location:login.php");
                    ?>
               }

          }
     </script>

</body>

</html>