<?php
require_once('function.php');
connectdb();
session_start();

if (!is_user()) {
	redirect('index.php');
}

?>

		

<?php
 $user = $_SESSION['username'];
$usid = mysqli_fetch_array(mysqli_query($conms,"SELECT id FROM users WHERE username='".$user."'"));
 $uid = $usid[0];
 include ('header.php');
 $err1 = $err2 = $err3 = "";
 ?>



 
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add New Bus</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                
                <div class="col-md-10 col-md-offset-1">
				
				
	

		<?php

if($_POST)
{

$route = $_POST["route"];
$tm = $_POST["tm"];
// $dt = $_POST["dt"];
$seat = 40;


///////////////////////-------------------->> Catid  ki 0??

 if($route==0)
      {
$err1=1;
}
 if(trim($tm)=="")
      {
$err2=1;
}
//  if(trim($dt)=="")
//       {
// $err3=0;
// }


$error = $err1+$err2+$err3;


if ($error == 0){

$res = mysqli_query($conms,"INSERT INTO bus_sch SET route='".$route."', time='".$tm."', seat='".$seat."'");
if($res){
/*
$bid = mysql_fetch_array(mysql_query("SELECT id FROM bus_info ORDER BY id DESC"));
$i=1;
while($i<=$seat){
mysql_query("INSERT INTO seat_details SET  busid='".$bid[0]."', seatid='".$i."', status='0'");
$i++;
}
*/
echo "<div class=\"alert alert-success alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Bus Added Successfully!

</div>";

}else{
	echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Some Problem Occured, Please Try Again. 

</div>";
}
} else {
	
	
if ($err1 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Please select a Route!!!!

</div>";
}
if ($err2 == 1){
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

You must Enter Bus Time!!!!

</div>";

echo"<h1></h1>";
}		
if ($err3 == 1){
	echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Please select a Bus Date.....

</div>";
}	

	
}



} 
	?>
		


	 <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>		
				
				
				
				
				
				    <form action="busadd.php" method="post">
		
                    <div class="form-group">
					
					<label>Select Route</label>
					
					<select name="route" class="form-control">
					<option value="0">Please Select a Route</option>
					<?php

$ddaa = mysqli_query($conms,"SELECT id, routename FROM bus_route ORDER BY id");
    echo mysqli_error($conms);
    while ($data = mysqli_fetch_array($ddaa))
    {									
 echo "<option value=\"$data[0]\">$data[1]</option>";
	}
?>
					
					</select><br/>


	<label>Select Time</label>




<div class="input-group mb15">
                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                <div class="bootstrap-timepicker"><input id="timepicker3" class="form-control" name="tm" type="text"><div class="bootstrap-timepicker-widget dropdown-menu"><table><tbody><tr><td><a href="#" data-action="incrementHour"><i class="glyphicon glyphicon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="incrementMinute"><i class="glyphicon glyphicon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td class="meridian-column"><a href="#" data-action="toggleMeridian"><i class="glyphicon glyphicon-chevron-up"></i></a></td></tr><tr><td><input name="hour" class="form-control bootstrap-timepicker-hour" maxlength="2" type="text"></td> <td class="separator">:</td><td><input name="minute" class="form-control bootstrap-timepicker-minute" maxlength="2" type="text"></td> <td class="separator">&nbsp;</td><td><input name="meridian" class="form-control bootstrap-timepicker-meridian" maxlength="2" type="text"></td></tr><tr><td><a href="#" data-action="decrementHour"><i class="glyphicon glyphicon-chevron-down"></i></a></td><td class="separator"></td><td><a href="#" data-action="decrementMinute"><i class="glyphicon glyphicon-chevron-down"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="toggleMeridian"><i class="glyphicon glyphicon-chevron-down"></i></a></td></tr></tbody></table></div></div>
              </div>








                    
					</div>
				
					<input type="submit" class="btn btn-lg btn-success btn-block" value="ADD">
			    	</form>
                </div>
						
						
						
						
						
				
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
	    



<script src="js/bootstrap-timepicker.min.js"></script>


<script>
jQuery(document).ready(function(){
    
  
  jQuery("#ssn").mask("999-99-9999");
  
  // Time Picker
  jQuery('#timepicker').timepicker({defaultTIme: false});
  jQuery('#timepicker2').timepicker({showMeridian: false});
  jQuery('#timepicker3').timepicker({minuteStep: 15});

  
});
</script>







<?php
 include ('footer.php');
 ?>