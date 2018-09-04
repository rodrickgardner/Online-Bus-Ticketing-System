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
    <!-- DataTables CSS -->
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
    <!-- DataTables Responsive CSS -->
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Pending Bus Tickets</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			
			
			
			<div class="row">
			
                              
<?php			
	if($_POST){
	
	$seatid= $_POST['seatid'];
	$busid= $_POST['busid'];
	$action= $_POST['action'];
		if($action==0){
			
			echo "<div class=\"alert alert-success alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>

Ignored Successfully </div>";
			
mysqli_query($conms,"UPDATE seat_details SET uid='', pname='', pmobile='', start='', depart='', trxid='', status='0', note='' WHERE id='".$seatid."'");

		}
		
		
		
		if($action==1){
			
			echo "<div class=\"alert alert-success alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>

Accepted Successfully </div>";
			
			
			
mysqli_query($conms,"UPDATE seat_details SET status='1' WHERE id='".$seatid."'");

$seat = "";


if($seatid==1){
		$seat = "A1";
	}
	if($seatid==2){
		$seat = "A2";
	}
	if($seatid==3){
		$seat = "A3";
	}
	if($seatid==4){
		$seat = "A4";
	}
	if($seatid==5){
		$seat = "B1";
	}
	if($seatid==6){
		$seat = "B2";
	}
	if($seatid==7){
		$seat = "B3";
	}
	if($seatid==8){
		$seat = "B4";
	}
	if($seatid==9){
		$seat = "C1";
	}
	if($seatid==10){
		$seat = "C2";
	}
	
	if($seatid==11){
		$seat = "C3";
	}
	if($seatid==12){
		$seat = "C4";
	}
	if($seatid==13){
		$seat = "D1";
	}
	if($seatid==14){
		$seat = "D2";
	}
	if($seatid==15){
		$seat = "D3";
	}
	if($seatid==16){
		$seat = "D4";
	}
	if($seatid==17){
		$seat = "E1";
	}
	if($seatid==18){
		$seat = "E2";
	}
	if($seatid==19){
		$seat = "E3";
	}
	if($seatid==20){
		$seat = "E4";
	}
	if($seatid==21){
		$seat = "F1";
	}
	if($seatid==22){
		$seat = "F2";
	}
	if($seatid==23){
		$seat = "F3";
	}
	if($seatid==24){
		$seat = "F4";
	}
	if($seatid==25){
		$seat = "G1";
	}
	if($seatid==26){
		$seat = "G2";
	}
	if($seatid==27){
		$seat = "G3";
	}
	if($seatid==28){
		$seat = "G4";
	}
	if($seatid==29){
		$seat = "H1";
	}
	if($seatid==30){
		$seat = "H2";
	}
	if($seatid==31){
		$seat = "H3";
	}
	if($seatid==32){
		$seat = "H4";
	}
	if($seatid==33){
		$seat = "I1";
	}
	if($seatid==34){
		$seat = "I2";
	}
	if($seatid==35){
		$seat = "I3";
	}
	if($seatid==36){
		$seat = "I4";
	}
	if($seatid==37){
		$seat = "J1";
	}
	if($seatid==38){
		$seat = "J2";
	}
	if($seatid==39){
		$seat = "J3";
	}
	if($seatid==40){
		$seat = "J4";
	}
	




	mysqli_query($conms,"UPDATE ticket_details SET status='1' WHERE busid='".$busid."' AND seats LIKE '".$seat."%'");
	
	echo "$busid $seat";
			

			
			
		}
		
	}		
?>			
			
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
                                            <th>Seat</th>
                                            <th>Transaction ID</th>
                                            <th>Ignore</th>
                                            <th>Accept</th>
                                        </tr>
                                    </thead>
                                     <tbody>
<?php

$ddaa = mysqli_query($conms,"SELECT id, busid, seatid, pmobile, trxid FROM seat_details WHERE status='2'");
    echo mysqli_error($conms);
    while ($data = mysqli_fetch_array($ddaa))
    {

$rname = mysqli_fetch_array(mysqli_query($conms,"SELECT routename FROM bus_route WHERE id='".$data[1]."'"));
$bss = mysqli_fetch_array(mysqli_query($conms,"SELECT date, time FROM bus_info WHERE id='".$data[1]."'"));
		
		
	if($data[2]==1){
		$snm = "A1";
	}
	if($data[2]==2){
		$snm = "A2";
	}
	if($data[2]==3){
		$snm = "A3";
	}
	if($data[2]==4){
		$snm = "A4";
	}
	if($data[2]==5){
		$snm = "B1";
	}
	if($data[2]==6){
		$snm = "B2";
	}
	if($data[2]==7){
		$snm = "B3";
	}
	if($data[2]==8){
		$snm = "B4";
	}
	if($data[2]==9){
		$snm = "C1";
	}
	if($data[2]==10){
		$snm = "C2";
	}
	
	if($data[2]==11){
		$snm = "C3";
	}
	if($data[2]==12){
		$snm = "C4";
	}
	if($data[2]==13){
		$snm = "D1";
	}
	if($data[2]==14){
		$snm = "D2";
	}
	if($data[2]==15){
		$snm = "D3";
	}
	if($data[2]==16){
		$snm = "D4";
	}
	if($data[2]==17){
		$snm = "E1";
	}
	if($data[2]==18){
		$snm = "E2";
	}
	if($data[2]==19){
		$snm = "E3";
	}
	if($data[2]==20){
		$snm = "E4";
	}
	if($data[2]==21){
		$snm = "F1";
	}
	if($data[2]==22){
		$snm = "F2";
	}
	if($data[2]==23){
		$snm = "F3";
	}
	if($data[2]==24){
		$snm = "F4";
	}
	if($data[2]==25){
		$snm = "G1";
	}
	if($data[2]==26){
		$snm = "G2";
	}
	if($data[2]==27){
		$snm = "G3";
	}
	if($data[2]==28){
		$snm = "G4";
	}
	if($data[2]==29){
		$snm = "H1";
	}
	if($data[2]==30){
		$snm = "H2";
	}
	if($data[2]==31){
		$snm = "H3";
	}
	if($data[2]==32){
		$snm = "H4";
	}
	if($data[2]==33){
		$snm = "I1";
	}
	if($data[2]==34){
		$snm = "I2";
	}
	if($data[2]==35){
		$snm = "I3";
	}
	if($data[2]==36){
		$snm = "I4";
	}
	if($data[2]==37){
		$snm = "J1";
	}
	if($data[2]==38){
		$snm = "J2";
	}
	if($data[2]==39){
		$snm = "J3";
	}
	if($data[2]==40){
		$snm = "J4";
	}
		
		
		
		
		
 echo "                                 <tr>
                                            <td>$data[1]</td>
                                            <td>$rname[0]</td>
                                            <td>$bss[0]</td>
                                            <td>$bss[1]</td>
                                            <td>$snm</td>
											<td>$data[4]</td>

                                   
                                            
											<td>
											<form action=\"\" method=\"post\">
											<input type=\"hidden\" name=\"seatid\" value=\"$data[0]\">
											<input type=\"hidden\" name=\"busid\" value=\"$data[1]\">
											<input type=\"hidden\" name=\"action\" value=\"0\">
											<button type=\"submit\" class=\"btn btn-danger btn-xs\">Ignore</button></form>
											
																							</td>	<td>
											<form action=\"\" method=\"post\">
											<input type=\"hidden\" name=\"seatid\" value=\"$data[0]\">
											<input type=\"hidden\" name=\"busid\" value=\"$data[1]\">
											<input type=\"hidden\" name=\"action\" value=\"1\">
											<button type=\"submit\" class=\"btn btn-success btn-xs\">ACCEPT</button></form>
											
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
        <!-- /#page-wrapper -->
<?php
 include ('footer.php');
 ?>