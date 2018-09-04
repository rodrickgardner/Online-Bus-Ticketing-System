		<div id="preloader">
			<div class="preloader"><img src="../img/progress.gif" alt=""></div>
		</div>
		<!-- begin Header -->
		<header>

		<nav class="navbar" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img src="../img/logo.png" alt="//"></a>
				</div>
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse">
					
					<ul class="nav navbar-nav menu-effect" id="foot">
						
						<li><a href="home.php">Home</a></li>
						<li><a href="channels.php">Channels</a></li>
						
						
						<?php 
						
 $subs = mysqli_fetch_array(mysqli_query($conms,"SELECT utype FROM users WHERE id='".$uid."'"));
if($subs[0]==2){
echo "<li><a href=\"prmchannels.php\">Premium Channels</a></li>";
}
						?>
						
					<li class="dropdown">
            			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a> 
						<ul class="dropdown-menu nav navbar-nav menu-effect">

				 <a href="changepass.php"> <button class="btn btn-primary btn-block">Change Password</button></a><br/>
				 <a href="editprofile.php"> <button class="btn btn-primary btn-block">Edit Profile</button></a><br/>
				 <a href="upgrade.php"> <button class="btn btn-primary btn-block">Upgrade Account</button></a><br/>
				 <a href="signout.php"> <button class="btn btn-primary btn-block">Sign Out</button></a><br/>
				  
                </ul>
              </li>
						
						
						
						
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>

		</header>
		<!-- end Header -->