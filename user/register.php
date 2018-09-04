<?php include'header2.php';?>

<?php 


require_once('function.php');
connectdb();
session_start();

if (is_user()) {
	redirect('login.php');
}






?>

<div id="loginpop" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="row">
        <div class="col-sm-6 login">
        <h4>Login</h4>
          <form action="signin_post.php" method="post" class="" role="form">
        <div class="form-group">
          <label class="sr-only" for="exampleInputEmail2">Username</label>
          <input type="text" class="form-control" id="exampleInputEmail2" name="username" placeholder="Username">
        </div>
        <div class="form-group">
          <label class="sr-only" for="exampleInputPassword2">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword2" name="password" placeholder="Password">
        </div>
       
        <button type="submit" class="btn btn-success">Sign in</button>
      </form>          
        </div>
        <div class="col-sm-6">
          <h4>New User Sign Up</h4>
          <p>Join now and get updated about all buses</p>
		  <form action="register.php">
    <input class="btn btn-info" type="submit" value="Register Now">
</form>
          
        </div>

      </div>
    </div>
  </div>
</div>



<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / Register</span>
    <h2>User Registration</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">


	
	<?php

if($_POST)
{

$username = $_POST["username"];
$pass = $_POST["pass"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$name = $_POST["name"];


///////////////////////-------------------->> username  faka ache to??

$check= mysqli_fetch_array(mysqli_query($conms,"SELECT COUNT(*) FROM user_details WHERE username='".$username."'"));

if ($check[0]>=1)
   {	
echo "<h3>Username Already Exists</h3><br/>Please try with another one.<br/><a href=\"register.php\">Go Back</a><br/>";

exit();
   }


///////////////////////-------------------->> Pass  faka ??
  
if(trim($pass)=="")
    {
		echo"<center>";
echo"<div class=\"col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 \"><h3>Password Can not be Empty!!!<br/><a href=\"register.php\">Go Back</a></h3></div>";

exit();
      }
	  
$passmd = MD5($pass);






$res = mysqli_query($conms,"INSERT INTO users SET username='".$username."', password='".$passmd."', email='".$email."', mobile='".$mobile."', name='".$name."'");
  


if($res){

echo "<div class=\"col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 \"><h3>User Added Successfully.</h3><br/><button class=\"btn btn-info\"   data-toggle=\"modal\" data-target=\"#loginpop\">Login</button><br/></div>";

exit();
}else{
echo "<div class=\"col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 \"><h3>Some problem occur....</h3><br/>Please Try again.</div><br/><br/>";
}


}
echo"</center>";

	?>









<div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
<form action="register.php" method="post">
				<input type="text" class="form-control" placeholder="User Name" name="username">
                <input type="text" class="form-control" placeholder="Full Name" name="name">
                <input type="text" class="form-control" placeholder="Enter Email" name="email">
				 <input type="text" class="form-control" placeholder="Enter Mobile Number" name="mobile">
                <input type="password" class="form-control" placeholder="Password" name="pass">
                

               
      <button type="submit" class="btn btn-success" name="Submit">Register</button>
          

</form>
      
        </div>
  
</div>
</div>
</div>

<?php include'footer.php';?>