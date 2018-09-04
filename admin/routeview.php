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
                    <h1 class="page-header">View/Edit Route</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
 <div class="row">
 
 
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List Of Route
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name of Route</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php

$ddaa = mysqli_query($conms,"SELECT id, routename FROM bus_route ORDER BY id");
    echo mysqli_error($conms);
    while ($data = mysqli_fetch_array($ddaa))
    {									
 echo "                                 <tr>
                                            <td>$data[0]</td>
                                            <td>$data[1]</td>
                                            <td>
											
											<form action=\"routeedit.php\" method=\"get\">
											<input type=\"hidden\" name=\"cid\" value=\"$data[0]\">
								            <input type=\"submit\" class=\"btn btn-warning\" value=\"EDIT\">
											</form>
											
											</td>
                                        </tr>
	";
	}
?>
										
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->
                
				
				
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->


<?php
 include ('footer.php');
 ?>