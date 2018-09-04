<?php
include ('include/header.php');
?>


	<!-- jQuery library (served from Google) -->
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> -->
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
	
		
		
		
		<ul class="bxslider">
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

<?php
$menu = $_GET["name"];
$match = ucwords(str_replace("-"," ",$menu));
//echo "$match";
$txt = mysqli_fetch_array(mysqli_query($conms,"SELECT btext FROM menus WHERE title='".$match."'"));

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
