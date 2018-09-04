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
 ?>


    

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">EDIT Route</h1>
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
$dt = $_POST["dt"];
$bid = $_POST["bid"];

///////////////////////-------------------->> Catid  ki 0??

 if($route==0)
      {
$err1=1;
}
 if(trim($tm)=="")
      {
$err2=1;
}
 if(trim($dt)=="")
      {
$err3=1;
}


$error = $err1+$err2+$err3;


if ($error == 0){

$res = mysqli_query($conms,"UPDATE bus_info SET route='".$route."', time='".$tm."', date='".$dt."' WHERE id='".$bid."'");
if($res){

echo "<div class=\"alert alert-success alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

UPDATE Successfully!

</div>";

}else{
	echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Some Problem Occurs, Please Try Again. 

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

You must have to Enter Bus Time!!!!

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
							
				
				
				
				
				
				
				
				
<?php
$bid = $_GET["bid"];


$details = mysqli_fetch_array(mysqli_query($conms,"SELECT route, time, date FROM bus_info WHERE id='".$bid."'"));
$rname = mysqli_fetch_array(mysqli_query($conms,"SELECT routename FROM bus_route WHERE id='".$details[0]."'"));
				
		echo "		    <form action=\"busedit.php?bid=$bid\" method=\"post\">
		            <div class=\"form-group\">

					<label>Select Route</label>
					
					<select name=\"route\" class=\"form-control\">
					<option value=\"$details[0]\">$rname[0]</option>
					<option value=\"0\">Please Select a Route</option>";
		

$ddaa = mysqli_query($conms,"SELECT id, routename FROM bus_route ORDER BY id");
    echo mysqli_error($conms);
    while ($data = mysqli_fetch_array($ddaa))
    {									
 echo "<option value=\"$data[0]\">$data[1]</option>";
	}

					
echo "	</select><br/>
			<label>Select Time</label><input class=\"form-control\" value=\"$details[1]\" name=\"tm\" type=\"text\">
            <label>Select Date</label><input class=\"form-control\" type=\"text\" id=\"datepicker\" name=\"dt\" value=\"$details[2]\">
			<input type=\"hidden\" name=\"bid\" value=\"$bid\">";
 ?>                   
					</div>
                   
					<input type="submit" class="btn btn-lg btn-success btn-block" value="Change">
			    	</form>
                </div>
						
						
						
						
						
				
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->


<?php
 include ('footer.php');
 ?>