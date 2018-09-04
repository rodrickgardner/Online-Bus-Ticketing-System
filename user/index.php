<?php
require_once('function.php');
connectdb();
session_start();


	 redirect('../');


if (!is_user()) {
	include 'header2.php';
}
else{
	include 'header.php';
	
}
?>


<?php
 $user = $_SESSION['username'];
$usid = mysqli_fetch_array(mysqli_query($conms,"SELECT id FROM users WHERE username='".$user."'"));
 $uid = $usid[0];
 ?>

<script>
$(function() {
$( "#datepicker" ).datepicker();
});
</script>




<div class="banner-search">
  <div class="container"> 
  
    <h3>Check Buses</h3>
    <div class="searchbar">
      <div class="row">
        <div class="col-lg-6 col-sm-6">
          
          <div class="row">
		  <form method="post" action="schedules.php">
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
			
              <input class="form-control" type="text" id="datepicker" placeholder="Set Date" name="date">
			  
            </div>
           
              <div class="col-lg-4 col-sm-4">
              <button class="btn btn-success">Check Now</button>
              </div>

        </form>  
                 </div>   
        </div>
<?php		
	if (is_user()) {
	echo "<div class=\"col-lg-5 col-lg-offset-1 col-sm-6 \">
           </div>";
      
}
else{
	echo "<div class=\"col-lg-5 col-lg-offset-1 col-sm-6 \">
          <p>Join now and get updated about all buses.</p>
          <button class=\"btn btn-info\"   data-toggle=\"modal\" data-target=\"#loginpop\">Login</button>        </div>";
      
	
}
?>
       </div> 
    </div>
  </div>
</div>



<div class="">
    

            <div id="slider" class="sl-slider-wrapper">

        <div class="sl-slider">
        
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-1"></div>
              
            </div>
          </div>
         
        </div>



      

      </div>
</div>

 


      </div>
    </div>
  </div>
</div>
<?php include'footer.php';?>