<!DOCTYPE html>
<html lang="en">
<?php include 'include/header.php' ?>

<body>
     <div class="row" style='height:100%;width:100%;background:url("img/partner/blue.jpg");background-position:center;background-repeat:no-repeat;background-size:cover;opacity:2;height:100vh;color:white'>

          <div class="col-sm-3"></div>
          <div class="col-sm-6 loginForm" style="margin-top:60px">
               <div class="error-pagewrap">
                    <div class="error-page-int">

                         <div class="content-error">
                              <div class="hpanel">
                                   <div class="panel-body">
                                        <form action="#" id="login" style="border-radius:5%">
                                             <div class="text-center custom-login">
                                                  <div style="height:100px">
                                                       <img src="img/logoGEP.png" alt="" class="img responsive" style="height:150px;width:170px">
                                                  </div>

                                                  <h3 class="text-white">Login to find Property</h3><br>

                                             </div>
                                             <div class="row">
                                                  <div class="form-group col-sm-2"></div>
                                                  <div class="form-group col-sm-8">
                                                       <label>Phone number: <i style="font-size:15px;color:#30caa0">Eg 256705936481</i></label>
                                                       <input class="form-control" name="phone" id="phone">
                                                       <p id="fone"></p>

                                                  </div>
                                                  <div class="form-group col-sm-2"></div>


                                                  <div class="form-group col-sm-2"></div>
                                                  <div class="form-group col-sm-8">
                                                       <label>Password</label>
                                                       <input type="password" class="form-control" id="password1">
                                                       <p id="pwad"></p>
                                                  </div>
                                                  <div class="form-group col-sm-2"></div>


                                             </div>
                                             <div class="text-center" style="padding-top:10px">
                                                  <!-- Login button -->
                                                  <button class="btn loginBtn" onclick="check()">Login</button>
                                                  <!-- cancel button -->
                                                  <button class="btn cancelbtn">Cancel</button>
                                             </div><br>

                                             <center>
                                                  <div>
                                                       Don't have an account? <a href="register.php">Register</a>
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
          #login {
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

          .loginBtn {
               background-color: #30caa0;
               color: white;
          }

          .loginBtn:hover {
               background-color: #178d6d;
          }
     </style>

     <script>
          // let check = () => {
          //      var Password1 = document.getElementById("password1")
          //      var PhoneNumber = document.getElementById("phone")
          //      if (Password1.value == '') {
          //           alert(`Password should not be empty`);
          //           Password1.style.border = '2px solid red'
          //           return false
          //      }
          //      if (PhoneNumber.value == '') {
          //           alert('Fill in the phone number');
          //           PhoneNumber.style.border = '2px solid blue'
          //      }
          //      if (Password1.value != '' && PhoneNumber.value != '') {
          //           <?php
                         //           header("location:db-featuredListing1.php");
                         //           
                         ?>
          //      }

          // }


          function check() {
               var Password1 = document.getElementById("password1");
               var PhoneNumber = document.getElementById("phone");


               if (Password1.value == "") {
                    var c = document.getElementById("pword");
                    c.textContent = "Password is required";
               }

               if (PhoneNumber.value == "") {
                    var c = document.getElementById("fone");
                    c.textContent = "Phone number is required";
               }

               // if (dateOfB.value == "") {
               //      var c = document.getElementById("dateOf");
               //      c.textContent = "Date of birth is required";
               // }
               // if (counTry.value == "") {
               //      var c = document.getElementById("cou");
               //      c.textContent = "Country Field is required";
               // }

               // if (place.value == "") {
               //      var c = document.getElementById("pla");
               //      c.textContent = "This field is required";
               // }

               // if (place.value == "") {
               //      var c = document.getElementById("pho");
               //      c.textContent = "This field is required";
               // }
               // if (mail.value == "") {
               //      var c = document.getElementById("ema");
               //      c.textContent = "This field is required";
               // }



          }
     </script>

</body>

</html>