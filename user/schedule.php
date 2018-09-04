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
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / About Us</span>
    <h2>Bus Schedules</h2>
</div>
</div>
<!-- banner -->


 <script>
$(function() {
$( "#datepicker" ).datepicker();
});
</script>


<div class="container">
<div class="spacer">
<h3 style="text-align: center;">Pick a Date and Route</h3>
<div class="row register">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">
<form action="schedules.php" method="post">
				<select class="form-control" name="route">
                <option>Select Route</option>
				<?php

$ddaa = mysqli_query($conms,"SELECT id, routename FROM bus_route ORDER BY id");
    echo mysqli_error($conms);
    while ($data = mysqli_fetch_array($ddaa))
    {									
 echo "<option value=\"$data[0]\">$data[1]</option>";
	}
?>
               
              </select>
               <input class="form-control" type="text" id="datepicker" placeholder="Set Date" name="date">
                
                

               
      <button type="submit" class="btn btn-success" name="Submit">View</button>
          

</form>
      
        </div>
  
</div>
</div>
</div>
	<?php
		//echo "Welcome $user !!!<br/>";
		?>
<?php include'footer.php';?>