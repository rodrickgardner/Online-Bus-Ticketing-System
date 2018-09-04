<?php
require_once('function.php');
connectdb();
  session_start();

if (!is_user()) {
	redirect('login.php');
}

?>


<?php
 $user = $_SESSION['username'];
 // $user = $_POST['username'];
 $res = mysqli_query($conms,"SELECT id FROM users WHERE username='".$user."'");
$usid = mysqli_fetch_array($res);
 $uid = $usid[0];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Transline Classic Bus Ticket Reservation System</title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="assets/style.css"/>
  <script src="js/jquery.min.js"></script>
 <script src="js/jquery-ui.js"></script>
	<script src="assets/bootstrap/js/bootstrap.js"></script>
  <script src="assets/script.js"></script>

<link rel="stylesheet" href="js/jquery-ui.css">

<!-- Owl stylesheet -->
<link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
<script src="assets/owl-carousel/owl.carousel.js"></script>
<!-- Owl stylesheet -->


<!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/slitslider/css/custom.css" />
    <script type="text/javascript" src="assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="assets/slitslider/js/jquery.slitslider.js"></script>
<!-- slitslider -->

</head>

<body>


<!-- Header Starts -->
<div class="navbar-wrapper">

        <div class="navbar-inverse" role="navigation">
          <div class="container">
            <div class="navbar-header">


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="..s/admin/index.php"> Admin Login</a></li>
               <li><a href="index.php">Home</a></li>
                <li><a href="schedule.php">Schedule</a></li>

				
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">My Account<b class="caret"></b></a>
				
				 <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                   <li role="presentation"><a role="menuitem" href="mytickets.php">My Tickets</a></li>
				    <li role="presentation"><a role="menuitem" href="signout.php">Logout</a></li>
                    
                </ul>
				</li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->





<div class="container">

<!-- Header Starts -->

<!-- #Header Starts -->
</div>