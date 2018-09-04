		<!-- Footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-lg-9">
						<nav class="navbar">
							<ul class="nav navbar-nav menu-effect" >
							

							
					<li><a href="#">&copy; Bus Ticket Management</a></li>	
							
							</ul>				
						</nav>
					</div>
					<div class="col-md-4 col-lg-3 copy">
						<nav class="navbar" >
						 <ul class="nav navbar-nav menu-effect">
								
						</ul>
						</nav>
					</div>
				</div>

			</div>
		</footer>
		<!-- end Footer --> 





		<!-- ******************************************************************** -->
		<!-- ************************* Javascript Files ************************* -->
		<!-- jQuery -->
		<script>window.jQuery || document.write("<script src=\"js/vendors/jquery/jquery-1.9.1.min.js\"")</script>

		<!-- Respond.js media queries for IE8 -->
		<script src="<?php echo $baseurl; ?>/js/vendors/respond.min.js"></script>

		<!-- Bootstrap-->
		<script src="<?php echo $baseurl; ?>/js/vendors/bootstrap.min.js" ></script>

		<!-- One Page Scroll -->
		<script src="<?php echo $baseurl; ?>/js/vendors/jquery/jquery.nav.js" ></script>
		<script src="<?php echo $baseurl; ?>/js/vendors/jquery/jquery.sticky.js" ></script>

		<!-- Isotope -->
		<script src="<?php echo $baseurl; ?>/js/vendors/jquery/jquery.isotope.min.js" ></script>

		<!-- Owl Carousel -->
		<script src="<?php echo $baseurl; ?>/js/vendors/owl-carousel/owl.carousel.js"></script>

		<!-- Appear -->
		<script src="<?php echo $baseurl; ?>/js/vendors/jquery/jquery.appear.js" ></script>

		<!-- Placeholder.js -->
		<!--[if lte IE 9]> <script src="<?php echo $baseurl; ?>/js/vendors/placeholder.js" ></script> <script>Placeholder.init();</script> <![endif]-->

		<!-- Player -->
		<script src="<?php echo $baseurl; ?>/js/vendors/jquery.mb.YTPlayer.js" ></script>

		<!-- Custom -->
		<script src="<?php echo $baseurl; ?>/js/script.js"  ></script>
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
		
		</script>

		<!-- *********************** End Javascript Files *********************** -->
		<!-- ******************************************************************** -->


	</body>
</html>