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
 
$bus = mysqli_fetch_array(mysqli_query($conms,"SELECT COUNT(*) FROM bus_info")); 



$tickets = mysqli_fetch_array(mysqli_query($conms,"SELECT COUNT(*) FROM seat_details")); 
$sold = mysqli_fetch_array(mysqli_query($conms,"SELECT COUNT(*) FROM seat_details WHERE status='1'")); 
$pend = mysqli_fetch_array(mysqli_query($conms,"SELECT COUNT(*) FROM seat_details WHERE status='2'")); 
 
 
 
 include ('header.php');
 ?>




    <div class="pageheader">
      <h2><i class="fa fa-cog"></i> General Setting </h2>
    </div>

    <div class="contentpanel">

      <div class="row">
        <div class="col-md-12">
      <div class="panel panel-default">
        <!--div class="panel-heading">
          <div class="panel-btns">
            <a href="#" class="panel-close">×</a>
            <a href="#" class="minimize">−</a>
          </div>      
        </div-->
        <div style="display: block;" class="panel-body panel-body-nopadding">
          
          <form action="" method="post" class="form-horizontal form-bordered">
         
		<?php

if($_POST)
{

$sitename = $_POST["sitename"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];

$res = mysqli_query($conms,"UPDATE general_setting SET sitename='".$sitename."', mobile='".$mobile."', email='".$email."' WHERE id='1'");
if($res){
	echo "<div class=\"alert alert-success alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Updated Successfully!

</div>";
}else{
	echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Some Problem Occurs, Please Try Again. 

</div>";
}

}



$data = mysqli_fetch_array(mysqli_query($conms,"SELECT sitename, mobile, email FROM general_setting WHERE id='1'"));
?>
			
			
            <div class="form-group">
              <label class="col-sm-3 control-label">WEBSITE TITLE</label>
              <div class="col-sm-6"><input name="sitename" value="<?php echo $data[0]; ?>" class="form-control" type="text"></div>
            </div>
                
            
                        
            <div class="form-group">
              <label class="col-sm-3 control-label">Mobile</label>
              <div class="col-sm-6"><input name="mobile" value="<?php echo $data[1]; ?>" class="form-control" type="text"></div>
            </div>
                
            
                        
            <div class="form-group">
              <label class="col-sm-3 control-label">Email</label>
              <div class="col-sm-6"><input name="email" value="<?php echo $data[2]; ?>" class="form-control" type="text"></div>
            </div>
                
            

            
            
        </div><!-- panel-body -->
        
        <div style="display: block;" class="panel-footer">
			 <div class="row">
				<div class="col-sm-6 col-sm-offset-3">
				  <button class="btn btn-primary">Submit</button>
				</div>
			 </div>
			 
			 
          </form>
          
			 
		  </div><!-- panel-footer -->
        
      </div><!-- panel -->
      
     
      
     
      
      


	  
       

               </div><!-- col-md-12 -->
      
      </div><!-- row -->

      
      
      
    </div><!-- contentpanel -->



 




<?php
 include ('include/footer.php');
 ?>
 
 	
</body>
</html>