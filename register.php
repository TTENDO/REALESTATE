<!DOCTYPE html>
<html lang="en">
<?php include 'include/header.php'?>

<body>
    <div class="row"style='height:100%;width:100%;background:url("img/partner/blue.jpg");background-position:center;background-repeat:no-repeat;background-size:cover;opacity:2;height:100vh;color:white'>

          <div class="col-sm-3"></div>
          <div class="col-sm-6 registerForm" style="margin-top:60px">
          <div class="error-pagewrap">
               <div class="error-page-int">
                 
                    <div class="content-error">
                         <div class="hpanel">
                         <div class="panel-body">
                         <form action="#" id="register" style="border-radius:5%">
                            <div class="text-center custom-login">
                                 <div style="height:100px">
                                      <img src="img/logoGEP.png" alt="" class="img responsive" style="height:150px;width:170px">
                                 </div>
                                 
                                     <h3 class="text-white">Register to find Property</h3>
                         
                            </div>
                              <div class="row">
                                   <div class="form-group col-lg-6">
                                        <label>First name</label>
                                        <input class="form-control" name="fname" required>
                                   </div>
                                   <div class="form-group col-lg-6">
                                        <label>Last name</label>
                                        <input class="form-control" name="lname" required>
                                   </div>
                                   
                                   <div class="form-group col-lg-6">
                                        <label>Email Address</label>
                                        <input class="form-control" name="email" required>
                                   </div>
                                   <div class="form-group col-lg-6">
                                        <label>Phone number: <i style="font-size:15px;color:#30caa0">Eg 256705936481</i></label>
                                        <input class="form-control" name="phone" required">
                                   </div>

                                   <div class="form-group col-lg-6">
                                        <label>Password</label>
                                        <input type="password" class="form-control" id="password1">
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
                                   <button class="btn  registerbtn" onclick=check()>Register</button>
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
                         rgba(69, 69, 71, 0.9),
                         rgba(69, 69, 71, 0.9)
                         );
                         /* background-color: #ff79c0;  */
                         background-position: center;
                         background-repeat: no-repeat;
                         background-size: cover;
                         opacity: 2;
                         padding:10px;
                         }
    </style>

     <script>
               let check = () => {
                    var Password1 = document.getElementById("password1")
                         if(Password1.value=='')
                              {
                              alert(`Password should not be empty`);
                              Password1.style.border =  '2px solid red'
                              return false
                              }
               }
     </script>
   
</body>
</html>