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
                    <h1 class="page-header">Add New Category</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                
                <div class="col-md-10 col-md-offset-1">
				
				
	

		<?php

if($_POST)
{

$cid = $_POST["cid"];
$pname = $_POST["pname"];


///////////////////////-------------------->> Catid  ki 0??

 if($cid==0)
      {
$err1=1;
}
 if(trim($pname)=="")
      {
$err2=1;
}


$error = $err1+$err2;


if ($error == 0){

$res = mysqli_query($conms,"INSERT INTO products SET cid='".$cid."', pname='".$pname."'");
if($res){
	echo "<div class=\"alert alert-success alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Product Added Successfully!

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

You must have to select a category!!!!

</div>";
echo"<h1></h1>";
}		
if ($err2 == 1){
	echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Product Name Can Not Be Empty....

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
				
				
				
				
				
				    <form action="productadd.php" method="post">
		
                    <div class="form-group">
					
					<label>Select Category</label>
					
					<select name="cid" class="form-control">
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
					<label>Select Time</label><input class="form-control" placeholder="Name Of The Product" name="pname" type="text">
                    <label>Select Date</label><input class="form-control" type="text" id="datepicker" placeholder="Set Date">
                    
					</div>
				
					<input type="submit" class="btn btn-lg btn-success btn-block" value="ADD">
			    	</form>
                </div>
						
						
						
						
						
				
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
	    

<?php
 include ('footer.php');
 ?>