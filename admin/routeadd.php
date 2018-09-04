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
 $err1 = "";
 ?>


    

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add New ROUTE</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                
                <div class="col-md-10 col-md-offset-1">
				
				
	

		<?php

if($_POST)
{

$rname = $_POST["rname"];

///////////////////////-------------------->> catname ki faka??

 if(trim($rname)=="")
      {
$err1=1;
}


$error = $err1;


if ($error == 0){

$res = mysqli_query($conms,"INSERT INTO bus_route SET routename='".$rname."'");
if($res){
	echo "<div class=\"alert alert-success alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Route Added Successfully!

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

Route Name Can Not Be Empty!!!

</div>";
echo"<h1></h1>";
}	

	
}



} 
	?>
							
				
				
				
				
				
				
				
				
				
				    <form action="routeadd.php" method="post">
		
                    <div class="form-group">
					
					<label>ROUTE Name</label><input class="form-control" placeholder="Name of the Route" name="rname" type="text"><br/>
				    
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