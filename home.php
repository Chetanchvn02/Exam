<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="assets/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/materialize.min.js"></script>
    <script>
    	$(document).ready(
    		function()

    		{
    			$(".button-collapse").sideNav();
    		});
    </script>
 </head>
 <body>
 		<!--<ul id="slide-out" class="slide-nav">
 			<li>
 				<div class="user-view">
 					<div class="background">
 						<img src="assets/image/cover.jpg">
 					</div>
 					<a href="#"><img src="assets/image/dp.jpg" class="circle"></a>
 					<a href="#"><span class="white-text name">Anupam Singh</span></a>
 					<a href="#"><span class="white-text email">anupam@gmail.com</span></a>
 				</div>
 			</li>
 			<li>
 				<a href="#">First Option</a>
 			</li>
 			<li>
 				<div class="divider"></div>
 			</li>
 			<li>
 				<a href="#">Second Option</a>
 			</li>
 			</ul>
 			<button type="button" class="button-collapse" data-activates="slide-out">Menu</button>
 			<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a> -->
 			<ul id="slide-out" class="side-nav">
    <li><div class="user-view">
      <div class="background">
        <img src="assets/image/cover.jpg">
      </div>
      <a href="#!user"><img class="circle" src="assets/image/dp.jpg"></a>
      <a href="#!name"><span class="white-text name">Anupam Singh</span></a>
      <a href="#!email"><span class="white-text email">anupam@gmail.com</span></a>
    </div></li>
    <li><a href="#!" class="waves-effect">First Option</li>
    <li><a href="#!" class="waves-effect">Second Option</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Sub Option</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
  </ul>
  <button ripple type="button" class="button-collapse" data-activates="slide-out">Menu</button>
  
 </body>
 </html>