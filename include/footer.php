		<!-- Footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-lg-9">
						<nav class="navbar" >
							<ul  class="nav navbar-nav menu-effect ">
							

							
					<li><a href="#">&copy; Bus Ticket Management</a></li>	
							
							</ul>				
						</nav>
					</div>
					<div class="col-md-4 col-lg-3 copy">
						<nav class="navbar">
						 <ul class="nav navbar-nav menu-effect">
								
		<li><a href="admin/index.php" data-toggle="modal">Admin Login</a></li>
		<li><a href="user/register.php" data-toggle="modal">Register</a></li>
		<li><a href="user/login.php" data-toggle="modal">login</a></li>
						</ul>
						</nav>
					</div>
				</div>

			</div>
		</footer>
		<!-- end Footer --> 



		<!-- Modal -->
		<div class="modal fade" id="search" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Search Ticket</h4>
					</div>
					<div class="modal-body">
					<div class="row">

	

  <form method="post" action="user/schedules.php">
            <div class="col-lg-4 col-sm-3 ">
              <select class="form-control" name="route">
                <option>Select a Route</option>
               <?php

$ddaa = mysqli_query($conms,"SELECT id, routename FROM bus_route ORDER BY id");
    echo mysqli_error($conms);
    while ($data = mysqli_fetch_array($ddaa))
    {									
 echo "<option value=\"$data[0]\">$data[1]</option>";
	}
?>
               
              </select>
            </div>
            <div class="col-lg-4 col-sm-4">
			
              <input class="form-control" type="text" id="datepicker" placeholder="Select Date" name="date"></div>
           
              <div class="col-lg-4 col-sm-4">
              <button class="btn btn-success">Check Now</button>
              </div>

        </form>  


    

						
						
					</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end Modal -->
		
		


		<!-- ******************************************************************** -->
		<!-- ************************* Javascript Files ************************* -->
		<!-- jQuery -->
		<script>window.jQuery || document.write("<script src=\"js/vendors/jquery/jquery-1.9.1.min.js\"")</script>

		<!-- Respond.js media queries for IE8 -->
		<script src="js/vendors/respond.min.js"></script>

		<!-- Bootstrap-->
		<script src="js/vendors/bootstrap.min.js" ></script>

		<!-- One Page Scroll -->
		<script src="js/vendors/jquery/jquery.nav.js" ></script>
		<script src="js/vendors/jquery/jquery.sticky.js" ></script>

		<!-- Isotope -->
		<script src="js/vendors/jquery/jquery.isotope.min.js" ></script>

		<!-- Owl Carousel -->
		<script src="js/vendors/owl-carousel/owl.carousel.js"></script>

		<!-- Appear -->
		<script src="js/vendors/jquery/jquery.appear.js" ></script>

		<!-- Placeholder.js -->
		<!--[if lte IE 9]> <script src="js/vendors/placeholder.js" ></script> <script>Placeholder.init();</script> <![endif]-->

		<!-- Player -->
		<script src="js/vendors/jquery.mb.YTPlayer.js" ></script>

		<!-- Custom -->
		<script src="js/script.js"  ></script>
                <script src="user/js/jquery-ui.js"></script>



		<script>
		
$(function() {
     var pgurl = window.location.href.substr(window.location.href
.lastIndexOf("/")+1);
     $("#foot li a").each(function(){
          if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
          $(this).addClass("active");
		  $('#head li a').addClass("active");
     })
});



$(function() {
$( "#datepicker" ).datepicker();
});


		
		</script>

		<!-- *********************** End Javascript Files *********************** -->
		<!-- ******************************************************************** -->


	</body>
</html>