<?php
require_once('function.php');
connectdb();
session_start();

if (is_user()) {
	redirect('schedule.php');
}

?>



	
	
<?php include'header2.php';?>



<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / Login</span>
    <h2>Login</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">


	<h3>Please Login to your account to access the page.</h3>

<?php if (!empty($_GET['error'])): ?>
	                              <div class="alert alert-danger alert-dismissable">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>	
							      <?php echo $_GET['error']?>
                                  </div>
                                <?php endif ?>
<div class="row register">

  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
<form action="signin_post.php" method="post">
				<input type="text" class="form-control" placeholder="User Name" name="username">
             
                <input type="password" class="form-control" placeholder="Password" name="password">
                

								
								
        <div class="col-lg-6 col-sm-6">        
      <button type="submit" class="btn btn-success" name="Submit">Sign in</button>
         </div> 

</form>
<div class="col-lg-6 col-sm-6">  
<form action="register.php">      
      <button type="submit" class="btn btn-success" name="Submit">Register</button>
         </div> </form>
                
        </div>
  
</div>
</div>
</div>

<?php include'footer.php';?>