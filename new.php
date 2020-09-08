<!-- <!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<div id="heart" class="button"></div>
	<style>
		html {
			padding: 0;
			margin: 0;
			min-height: 100%;
		}

		body {
			background: #111;
			position: relative;
			min-height: 100%;
		}

		.button {
			width: 50px;
			height: 50px;
			top: 50%;
			position: fixed;
			left: 50%;
			margin-top: -45px;
			margin-left: -50px;
			border-radius: 5px;
			background: none;
			cursor: pointer;
			transition: background 0.5s ease;
		}

		.button:hover {}

		.activeheart:before,
		.active#heart:after {
			background: red !important;
		}

		#heart {
			width: 100px;
			height: 90px;
			transition: background 0.5s ease;
		}

		#heart:before,
		#heart:after {
			transition: background 0.5s ease;
			position: absolute;
			content: "";
			left: 50px;
			top: 0;
			width: 50px;
			height: 80px;
			background: dimgrey;
			border-radius: 50px 50px 0 0;
			transform-origin: 0 100%;

		}

		#heart:after {
			left: 0;
			transform: rotate(45deg);
			transform-origin: 100% 100%;


		}
	</style>
</body>

</html> -->

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
          .onoffswitch {
               position: relative;
               width: 54px;
               /* -webkit-user-select: none;
               -moz-user-select: none;
               -ms-user-select: none; */
          }

          .onoffswitch-label {
               display: block;
               overflow: hidden;
               cursor: pointer;
               border: 2px solid #006DF0;
               border-radius: 3px;
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
               content: "ON";
               padding-left: 7px;
               background-color: #006DF0;
               color: #FFFFFF;
          }

          /*Off button design */
          .onoffswitch-inner:after {
               content: "OFF";
               padding-right: 7px;
               background-color: #FFFFFF;
               color: #919191;
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
               background: #FFFFFF;
               border: 2px solid #006DF0;
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