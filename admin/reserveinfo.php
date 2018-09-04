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
                    <h1 class="page-header">SEAT Reserve Informations</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			
			
		
			<div class="row">
                <div class="col-lg-12">
				<div class="col-lg-12">
				
<?php

echo "<form method=\"post\" action=\"javascript:history.go(-1)\">";	

$sid = $_GET["sid"];
$bid = $_GET["bid"];


$buss = mysqli_query($conms,"SELECT id, busid, seatid, pname, pmobile, start, depart, trxid, status FROM seat_details WHERE seatid='".$sid."' AND busid='".$bid."'");
    echo mysqli_error($conms);
    while ($datas = mysqli_fetch_array($buss))
    {
		
		$bss = mysqli_fetch_array(mysqli_query($conms,"SELECT id, route, time, date, seat FROM bus_info WHERE id='".$datas[1]."'"));
		
		$tkt = mysqli_fetch_array(mysqli_query($conms,"SELECT id, seats FROM ticket_details WHERE busid='".$datas[1]."' AND pmobile='".$datas[4]."' AND pname='".$datas[3]."'"));
		
		$rname = mysqli_fetch_array(mysqli_query($conms,"SELECT routename FROM bus_route WHERE id='".$bss[1]."'"));
		
		
    $seats = $datas[2];
	
	if($seats==1){
		$seat = "A1";
	}
	if($seats==2){
		$seat = "A2";
	}
	if($seats==3){
		$seat = "A3";
	}
	if($seats==4){
		$seat = "A4";
	}
	if($seats==5){
		$seat = "B1";
	}
	if($seats==6){
		$seat = "B2";
	}
	if($seats==7){
		$seat = "B3";
	}
	if($seats==8){
		$seat = "B4";
	}
	if($seats==9){
		$seat = "C1";
	}
	if($seats==10){
		$seat = "C2";
	}
	
	if($seats==11){
		$seat = "C3";
	}
	if($seats==12){
		$seat = "C4";
	}
	if($seats==13){
		$seat = "D1";
	}
	if($seats==14){
		$seat = "D2";
	}
	if($seats==15){
		$seat = "D3";
	}
	if($seats==16){
		$seat = "D4";
	}
	if($seats==17){
		$seat = "E1";
	}
	if($seats==18){
		$seat = "E2";
	}
	if($seats==19){
		$seat = "E3";
	}
	if($seats==20){
		$seat = "E4";
	}
	if($seats==21){
		$seat = "F1";
	}
	if($seats==22){
		$seat = "F2";
	}
	if($seats==23){
		$seat = "F3";
	}
	if($seats==24){
		$seat = "F4";
	}
	if($seats==25){
		$seat = "G1";
	}
	if($seats==26){
		$seat = "G2";
	}
	if($seats==27){
		$seat = "G3";
	}
	if($seats==28){
		$seat = "G4";
	}
	if($seats==29){
		$seat = "H1";
	}
	if($seats==30){
		$seat = "H2";
	}
	if($seats==31){
		$seat = "H3";
	}
	if($seats==32){
		$seat = "H4";
	}
	if($seats==33){
		$seat = "I1";
	}
	if($seats==34){
		$seat = "I2";
	}
	if($seats==35){
		$seat = "I3";
	}
	if($seats==36){
		$seat = "I4";
	}
	if($seats==37){
		$seat = "J1";
	}
	if($seats==38){
		$seat = "J2";
	}
	if($seats==39){
		$seat = "J3";
	}
	if($seats==40){
		$seat = "J4";
	}
	
	
	if($datas[8]==0){	
	echo "<b>Bus ID: $datas[1]<br>Route: $rname[0]<br>Date: $bss[3]<br>Time: $bss[2]<br>Seat Number: $seat</b><hr>";

	echo "<b>This seat is not booked yet...</b><br>This Seat is Available for booking..";
	
	
	}else{	
echo "<b>Bus ID: $datas[1]<br>Route: $rname[0]<br>Date: $bss[3]<br>Time: $bss[2]<br>Seat Number: $seat</b><hr>";
echo "<h4><b>Seats Reserve Informations:</b></h4>";
echo "<b>Ticket Number: <font color=\"green\">#$tkt[0]</font><br>Passenger's Name: <font color=\"green\">$datas[3]</font><br>Passenger's Mobile: <font color=\"green\">$datas[4]</font><br>Start Place: <font color=\"green\">$datas[5]</font><br>Depart Place: <font color=\"green\">$datas[6]</font><br></b>";

	}



}



?>
</b>
<hr>


                </div>
 
 
 
 
 
 
		<input type="submit" class="btn btn-lg btn-success btn-block" value="Back"/>						
 </form>                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            

        </div>
        <!-- /#page-wrapper -->

<?php
 include ('footer.php');
 ?>
