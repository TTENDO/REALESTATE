<!DOCTYPE html>
<html lang="en">
<?php include 'include/header.php' ?>

<body>
     <?php

     error_reporting(E_ALL ^ E_NOTICE); // DEALING WITH THE ERRORS OF NOTICE

     // connect to the server
     $conn = mysqli_connect("localhost", "root", "", "realestate");
     // check connection
     if (!$conn) {
          die("ERROR: Could not connect : " . mysqli_error($conn));
     }

     mysqli_select_db($conn, "realestate");



     $sql = "insert into property_seekers(firstname,lastname,emailAddress,phoneNumber,password) VALUES('$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[phone]','$_POST[password]')";

     if (!mysqli_query($conn, $sql)) {
          die('Error: ' . mysqli_error($conn));
     }



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
</body>

</html>