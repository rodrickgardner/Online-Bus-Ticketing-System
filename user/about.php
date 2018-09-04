<?php
require_once('function.php');
connectdb();
session_start();

if (!is_user()) {
	include'header2.php';
}
else{
	include'header.php';
	
}
?>


<?php
 $user = $_SESSION['username'];
$usid = mysql_fetch_array(mysql_query("SELECT id FROM users WHERE username='".$user."'"));
 $uid = $usid[0];
 ?>


<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / About Us</span>
    <h2>About Us</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row">
  <div class="col-lg-8  col-lg-offset-2">
  
  <h3>About Pabna Express</h3>
  <p>Something About Pabna Express.</p>
  <h3>Bus Profile</h3>
  <p>All buses and profiles.</p>
  
  </div>
 
</div>
</div>
</div>

<?php include'footer.php';?>