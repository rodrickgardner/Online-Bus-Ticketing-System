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
$usid = mysqli_fetch_array(mysqli_query($conms,"SELECT id FROM users WHERE username='".$user."'"));
 $uid = $usid[0];
 ?>


<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / Contact Us</span>
    <h2>Contact Us</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row contact">
  <div class="col-lg-6 col-sm-6 ">


                <input type="text" class="form-control" placeholder="Full Name">
                <input type="text" class="form-control" placeholder="Email Address">
                <input type="text" class="form-control" placeholder="Contact Number">
                <textarea rows="6" class="form-control" placeholder="Message"></textarea>
      <button type="submit" class="btn btn-success" name="Submit">Send Message</button>
          


                
        </div>
  <div class="col-lg-6 col-sm-6 ">
  <div class="well"><div style="width: 515px"><iframe width="515" height="300" src="http://regiohelden.de/google-maps/map_en.php?width=515&amp;height=300&amp;hl=en&amp;q=Pabna%20Sadar%20Upazila+(Pabna%20Express)&amp;ie=UTF8&amp;t=&amp;z=13&amp;iwloc=A&amp;output=embed" style="frameborder:0; scrolling:no; marginheight:0;" ></iframe></div></div>
  
  
  
  </div>
</div>
</div>
</div>

<?php include'footer.php';?>