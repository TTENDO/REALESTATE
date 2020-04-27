
<!DOCTYPE html>
<html lang="en">
<?php include 'include/header.php'?>
<body  class="mainSection container">
	<!-- Page Preloder -->
	<!-- <div id="preloder">
		<div class="loader"></div>
	</div> -->

    	<!-- Header section with the nav -->
     <div class="row">
          <?php include 'include/navpsDashboard.php'?>
     </div>
     <br><br><br><br>
     <div class="row">

          <div class="col-sm-2">
               <span class="sidenav left">
                    <img src="img/logoGEP.png" alt="Logo" style="height: 150px;width: 150px;padding-left: 20px"> 
                         	<a href="#" class="nav-link">
                                   <i class="fa fa-user">&nbsp;&nbsp;
                                        My Profile</i>
                              </a>
                              <!-- <a href="#" class="nav-link">
                                   <i class="fa fa-map-marker">&nbsp;&nbsp;My Properties List</i>
                              </a> -->
                              <!-- <a href="addNewProperty.php" class="nav-link">
                                   <i class="fa fa-plus active" >&nbsp;&nbsp;Add New Property</i>
                              </a> -->
                              <a href="favorites.php" class="nav-link">
                                   <i class="fa fa-heart active">&nbsp;&nbsp;Favorites</i>
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
               </span>
          </div>
          <div class="col-sm-10 ">
               <h2>Dashboard-Favorites</h2>

               <div class="after ">
                    o	3.2.4  Implementation Methodology
                    o	3.3 Overall network architecture
                    o	SYSTEM IMPLEMENTATION – PROPERTY MANAGEMENT SYSTEM PROJECT
                    o	II] OBJECTIVES OF TESTING:
                    o	VI] TESTING METHODOLOGY:
                    o	FUTURE SCOPE AND FURTHER ENHANCEMENT OF THE PROJECT
                    o	5.2 Further Enhancement – PROPERTY MANAGEMENT SYSTEM PROJECT
                    o	5.3 CONCLUSION
                    o	APPENDIX – PROPERTY MANAGEMENT SYSTEM PROJECT

               </div>
          </div>

     </div>
     



            
     <style>
        /* <!-- main section background --> */
      .mainSection {
        /*=====making the bg dim======*/
         background:/* linear-gradient(
            rgba(21, 21, 24, 0.2),
             rgba(21, 21, 24, 0.5),
              rgba(21, 21, 24, 0.5),
               rgba(21, 21, 24, 0.5)
          ), */
      url("img/partner/bed.jpg");

        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        opacity: 1;
        height:100vh;
        color:white;
      }
     .left{

          background: linear-gradient(
               rgba(20, 20, 24, 0.3),
               rgba(20, 20, 24, 0.3),
               rgba(20, 20, 24, 0.3),
               rgba(20, 20, 24, 0.3)
          );
          height: 100vh;
          font-size: 10px;

      }
     
      /*creating space btn the nav links and putting them in a straight line with the logo */
      .left> a{
           margin-top:20px;
           padding-left:20px;
      }

                    /* Fixed sidenav, full height */
          .sidenav {
          height: 100%;
          width: 200px;
          position: fixed;
          z-index: 1;
          top: 0;
          left: 0;
          /* background-color: #111; */
          overflow-x: hidden;
          padding-top: 20px;
          }

          /* Style the sidenav links and the dropdown button */
          .sidenav a, .dropdown-btn {
          padding: 6px 8px 6px 16px;
          text-decoration: none;
          font-size: 15px;
          color: white;
          display: block;
          border: none;
          background: none;
          width:100%;
          text-align: left;
          cursor: pointer;
          outline: none;
          }

          /* On mouse-over */
          .sidenav a:hover, .dropdown-btn:hover {
          color: #30caa0;
          }

          /* Main content */
          .main {
          margin-left: 200px; /* Same as the width of the sidenav */
          font-size: 20px; /* Increased text to enable scrolling */
          padding: 0px 10px;
          }

          /* Add an active class to the active dropdown button */
          .active {
          /* background-color: black; */
          color: #30caa0;
          }

          /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
          .dropdown-container {
          display: none;
          background-color: #262626;
          padding-left: 8px;
          }

          /* Optional: Style the caret down icon */
          .fa-caret-down {
          float: right;
          padding-right: 8px;
          }

          h2{
               color:white;
          }
          .after{
               padding-top:50px;
          }

               
    </style>

    <script>
               
          //* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
          var dropdown = document.getElementsByClassName("dropdown-btn");
          var i;

          for (i = 0; i < dropdown.length; i++) {
          dropdown[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var dropdownContent = this.nextElementSibling;
          if (dropdownContent.style.display === "block") {
               dropdownContent.style.display = "none";
          } else {
               dropdownContent.style.display = "block";
          }
          });
          }


          
    </script>
	
</body>
</html>





