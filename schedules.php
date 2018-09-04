<?php
include ('include/header.php');
?>


	<!-- jQuery library (served from Google) -->
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src=""></script>
<!-- bxSlider Javascript file -->
<script src="jquery.bxslider.min.js"></script>
<!-- bxSlider CSS file -->
<link href="jquery.bxslider.css" rel="stylesheet" />
	


 <script>
$(function() {
$( "#datepicker" ).datepicker();
});
</script>

</head>

	<body>
<?php
include ('include/menu.php');
?>

		<!-- begin Content -->
		<section>
		
		
		


<div class="container">
<div class="spacer">
<center><h3>Available Buses for you</h3></center>
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
                                            <th>Bus #</th>
                                            <th>Route</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Total Seat</th>
                                            <th>Sold Seat</th>
                                            <th>Available Seat</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                     <tbody>
<?php
$dt = $_POST["date"];
$rt = $_POST["route"];






$ddaa = mysqli_query($conms,"SELECT id, route, time, date, seat FROM bus_info WHERE date='".$dt."' AND route='".$rt."'");
    echo mysqli_error($conms);
    while ($data = mysqli_fetch_array($ddaa))
    {
$sold = mysqli_fetch_array(mysqli_query($conms,"SELECT COUNT(*) FROM seat_details WHERE busid='".$data[0]."' AND status='1'"));
$available = $data[4]-$sold[0];
$rname = mysqli_fetch_array(mysqli_query($conms,"SELECT routename FROM bus_route WHERE id='".$data[1]."'"));
		
 echo "                                 <tr>
                                            <td>$data[0]</td>
                                            <td>$rname[0]</td>
                                            <td>$data[3]</td>
                                            <td>$data[2]</td>
                                            <td>$data[4]</td>
                                            <td>$sold[0]</td>
                                            <td>$available</td>";
                                   
                                        if (is_user()) {    
											 echo " <td>
											
											<a href=\"busseats.php?bid=$data[0]\"><button type=\"button\" class=\"btn btn-success btn-xs\">Reserve SEATS</button></a>
											
										</td>";
                                        } else {
											echo " <td>
											
											<a href=\"login2.php?bid=$data[0]\"><button type=\"button\" class=\"btn btn-success btn-xs\">Login To Reserve SEATS</button></a>
											
										</td>";
											
										}
	
	}
?></tr>
										
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
include ('include/footer.php');
?>