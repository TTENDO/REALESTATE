<!DOCTYPE html>
<html lang="en">

<?php include 'include/header.php' ?>

<body>
     <div class="onoffswitch">
          <input type="checkbox" name="collapsemenu" class="onoffswitch-checkbox" id="example" />
          <label class="onoffswitch-label" for="example">
               <span class="onoffswitch-inner"></span>
               <!-- <span class="onoffswitch-switch"></span> -->
          </label>
     </div>




     <style>
          .fa {
               font-size: 20px;
               color: black;

          }

          .onoffswitch {
               position: relative;
               width: 80px;
               /* -webkit-user-select: none;
               -moz-user-select: none;
               -ms-user-select: none; */
          }

          .onoffswitch-label {
               display: block;
               overflow: hidden;
               cursor: pointer;
               border: 2px solid red;
               border-radius: 10px 50px;
          }

          .onoffswitch-checkbox:checked+.onoffswitch-label .onoffswitch-inner {
               margin-left: 0;
          }

          .onoffswitch-inner {
               display: block;
               width: 200%;
               margin-left: -100%;
               /* -moz-transition: margin 0.3s ease-in 0s;
               -webkit-transition: margin 0.3s ease-in 0s;
               -o-transition: margin 0.3s ease-in 0s;
               transition: margin 0.3s ease-in 0s; */
          }

          .onoffswitch-inner:before {
               content: "FAVORITE";
               padding-left: 7px;
               background-color: red;
               color: #FFFFFF;
          }

          /*Off button design */
          .onoffswitch-inner:after {
               content: "ADD TO FAV";
               padding-right: 7px;
               background-color: #FFFFFF;
               color: red;
               text-align: right;
          }

          .onoffswitch-inner:before,
          .onoffswitch-inner:after {
               display: block;
               float: left;
               width: 50%;
               height: 16px;
               line-height: 16px;
               font-size: 10px;
               font-family: Trebuchet, Arial, sans-serif;
               font-weight: bold;
               -moz-box-sizing: border-box;
               -webkit-box-sizing: border-box;
               box-sizing: border-box;
          }

          /*designs the switch */
          .onoffswitch-switch {
               display: block;
               width: 18px;
               margin: 0;
               background: red;
               border: 2px solid red;
               border-radius: 3px;
               position: absolute;
               top: 0;
               bottom: 0;
               right: 36px;
               /* -moz-transition: all 0.3s ease-in 0s;
               -webkit-transition: all 0.3s ease-in 0s;
               -o-transition: all 0.3s ease-in 0s;
               transition: all 0.3s ease-in 0s; */
          }

          /* hides the checkbox tick*/
          .onoffswitch-checkbox {
               display: none;
          }

          /* returns the switch to the right to reveal the on word*/
          .onoffswitch-checkbox:checked+.onoffswitch-label .onoffswitch-switch {
               right: 0;
          }
     </style>

</body>

</html>