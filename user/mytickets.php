<?php include'header.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / About Us</span>
    <h2>Your Booked Seats</h2>
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
<center><h3>Seats Purchase By You</h3></center>
<div class="row register">
			
			
			<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">

                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Ticket Number</th>
                                            <th>Route</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Seats</th>
                                            <th>Cost</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                     <tbody>
<?php
// $dt = $_POST["date"];
// $rt = $_POST["route"];


if (is_user()) {

$usid = mysqli_fetch_array(mysqli_query($conms,"SELECT id FROM users WHERE username='".$user."'"));
 $uid = $usid[0];
 
 }



$ddaa = mysqli_query($conms,"SELECT id, busid, seats, cost FROM ticket_details WHERE uid='".$uid."'");
    echo mysqli_error($conms);
    while ($data = mysqli_fetch_array($ddaa))
    {
$buss = @mysqli_fetch_array(mysqli_query($conms,"SELECT id, route, time, date FROM bus_info WHERE id='".$data[1]."'"));

$rname = mysqli_fetch_array(mysqli_query($conms,"SELECT routename FROM bus_route WHERE id='".$buss[1]."'"));
		
 echo "                                 <tr>
                                            <td>$data[0]</td>
                                            <td>$rname[0]</td>
                                            <td>$buss[2]</td>
                                            <td>$buss[3]</td>
                                            <td>$data[2]</td>
                                            <td>$data[3]</td>
                                            
                                   
                                            
											<td>
											
											<a href=\"print.php?cid=$data[0]\"><button type=\"button\" class=\"btn btn-success btn-xs\">Print Ticket</button></a>
											
											</td>
                                        </tr>
	";
	}
?>
										
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            

</div>
</div>
</div>
	<?php
		//echo "Welcome $user !!!<br/>";
		?>
<?php include'footer.php';?>