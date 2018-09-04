<?php
require_once('include/header.php');
?>


	<!-- jQuery library (served from Google) -->
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> -->
<script src="js/jquery-1.8.2.min.js"></script>
<link href='/localhost/bus1/css/opensans.css' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src=""></script>
<!-- bxSlider Javascript file -->
<script src="jquery.bxslider.min.js"></script>
<!-- bxSlider CSS file -->
<link href="jquery.bxslider.css" rel="stylesheet" />
<link rel="shortcut icon" type="image/x-icon" href="bus.png" />


</head>

	<body>
<?php
include ('include/menu.php');
?>

		<!-- begin Content -->

		
		
		
		<ul class="bxslider" style="padding-left:5px;">
<?php

//////---------------------->>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> SLIDER  
    $ddaa = mysqli_query($conms,"SELECT id, img FROM sliders ORDER BY id");
    echo mysqli_error($conms);
    while ($data = mysqli_fetch_array($ddaa))
    {									
 echo " <li><img src=\"img/slider/$data[1]\" alt=\"slider\" ></li>";
	}
//////---------------------->>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> SLIDER
?>
</ul>
	
	
	
	<script>
	$(document).ready(function(){
  $('.bxslider').bxSlider();
});
	</script>
				<section>
		

			<h1>&nbsp; </h1>

		
			<article class="plans" id="menu_price">
				<div class="container">


			<h2>&nbsp; </h2>





<div class="row">
					
					<div class="col-sm-6 col-md-3">
						<div class="plans-items animated flipInY visible" data-animation="flipInY" data-animation-delay="200">
						<img src="img/1.jpg" alt="" style="width:100%;">
							<p>Global Access</p>
							Access our Reservation System from anywhere and find out how many are available<br><br>
							<a href="#" class="btn2 btn-plans">Get the Access</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3">
						<div class="plans-items animated flipInY visible" data-animation="flipInY" data-animation-delay="200">
						<img src="img/2.jpg" alt="" style="width:100%;">
							<p>Easy Booking</p>
							Book your ticket easily from anywhere with our user friendly responsive platform.<br><br>
							<a href="#" class="btn2 btn-plans">Try it out</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3">
						<div class="plans-items animated flipInY visible" data-animation="flipInY" data-animation-delay="200">
						<img src="img/3.jpg" alt="" style="width:100%;">
							<p>Fast Access</p>
							Our service allows lightning speed access to the system. Easy Support Tools Included<br><br>
							<a href="#" class="btn2 btn-plans">Enjoy the speed</a>
						</div>
					</div>

					<div class="col-sm-6 col-md-3">
						<div class="plans-items animated flipInY visible" data-animation="flipInY" data-animation-delay="200">
						<img src="img/4.jpg" alt="" style="width:100%;">
							<p>Agile Support</p>
							We are ready to offer you best in class customer support. Easy Understanding FAQ Included<br><br>
							<a href="#" class="btn2 btn-plans">Find answers</a>
						</div>
					</div>


					</div>














					
					<div class="row">
<?php
$txt = mysqli_fetch_array(mysqli_query($conms,"SELECT btext FROM menus WHERE id='1'"));
echo "$txt[0]";
?>	
        </div>
					

					</div>

				
			</article>

		</section>
		<!-- end Content -->

<?php
include ('include/footer.php');
?>