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

  <link href="css/style.default.css" rel="stylesheet">
  <link href="css/jquery.datatables.css" rel="stylesheet">


    <div class="pageheader">
      <h2><i class="fa fa-th-list"></i> Menu List</h2>
    </div>

    
    <div class="contentpanel">
	 <div class="panel panel-default">

        <div class="panel-body">
		
		 <div class="clearfix mb30"></div>

          <div class="table-responsive">
          <table class="table table-striped" id="table2">
              <thead>
                 <tr>
                    <th>#</th>
                    <th>Menu Title</th>
                    <th>ACTION</th>

					</tr>
              </thead>
              <tbody>
                
				
				<?php

$ddaa = mysqli_query($conms,"SELECT id, title FROM menus ORDER BY id");
    echo mysqli_error($conms);
    while ($data = mysqli_fetch_array($ddaa))
    {									
 echo "                                 <tr>
                                            <td>$data[0]</td>
                                            <td>$data[1]</td>
                                            <td>
							<a href=\"menuedit.php?id=$data[0]\" class=\"btn btn-info btn-xs\">Edit</a>
							<a href=\"menudelete.php?id=$data[0]\" class=\"btn btn-danger btn-xs\">DELETE</a>
											</td>
                                        </tr>
	";
	}
?>
				
				
			
				




				
				 
              </tbody>
           </table>
          </div><!-- table-responsive -->
		  
        </div>
      </div>
                  
      

      
    </div><!-- contentpanel -->
    


  
</section>


<?php
 include ('include/footer.php');
 ?>

<script src="js/jquery.datatables.min.js"></script>
<script src="js/select2.min.js"></script>

<script>
  jQuery(document).ready(function() {
    
    "use strict";
    
    jQuery('#table1').dataTable();
    
    jQuery('#table2').dataTable({
      "sPaginationType": "full_numbers"
    });
    
    // Select2
    jQuery('select').select2({
        minimumResultsForSearch: -1
    });
    
    jQuery('select').removeClass('form-control');
    
    // Delete row in a table
    jQuery('.delete-row').click(function(){
      var c = confirm("Continue delete?");
      if(c)
        jQuery(this).closest('tr').fadeOut(function(){
          jQuery(this).remove();
        });
        
        return false;
    });
    
    // Show aciton upon row hover
    jQuery('.table-hidaction tbody tr').hover(function(){
      jQuery(this).find('.table-action-hide a').animate({opacity: 1});
    },function(){
      jQuery(this).find('.table-action-hide a').animate({opacity: 0});
    });
  
  
  });
</script>



</body>
</html>



