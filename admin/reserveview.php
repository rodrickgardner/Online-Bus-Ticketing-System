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
                    <h1 class="page-header">SEAT Information</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			
			
			
			<div class="row">
                <div class="col-lg-12">
                    
<?php

$bid = $_GET["bid"];

echo "<h4>SEAT Information of Bus No: $bid</h4><br>";

$ddaa = mysqli_query($conms,"SELECT id, seatid, status FROM seat_details WHERE busid='".$bid."' ORDER BY id");
    echo mysqli_error($conms);
    while ($data = mysqli_fetch_array($ddaa))
    {


$sold = mysqli_fetch_array(mysqli_query($conms,"SELECT status FROM seat_details WHERE id='".$data[0]."'"));
if($sold[0]==1){
	$btn = "danger";
}else{
	$btn = "success";
	}

	if($data[1]==1){
		$snm = "A1";
	}
	if($data[1]==2){
		$snm = "A2";
	}
	if($data[1]==3){
		$snm = "A3";
	}
	if($data[1]==4){
		$snm = "A4";
	}
	if($data[1]==5){
		$snm = "B1";
	}
	if($data[1]==6){
		$snm = "B2";
	}
	if($data[1]==7){
		$snm = "B3";
	}
	if($data[1]==8){
		$snm = "B4";
	}
	if($data[1]==9){
		$snm = "C1";
	}
	if($data[1]==10){
		$snm = "C2";
	}
	
	if($data[1]==11){
		$snm = "C3";
	}
	if($data[1]==12){
		$snm = "C4";
	}
	if($data[1]==13){
		$snm = "D1";
	}
	if($data[1]==14){
		$snm = "D2";
	}
	if($data[1]==15){
		$snm = "D3";
	}
	if($data[1]==16){
		$snm = "D4";
	}
	if($data[1]==17){
		$snm = "E1";
	}
	if($data[1]==18){
		$snm = "E2";
	}
	if($data[1]==19){
		$snm = "E3";
	}
	if($data[1]==20){
		$snm = "E4";
	}
	if($data[1]==21){
		$snm = "F1";
	}
	if($data[1]==22){
		$snm = "F2";
	}
	if($data[1]==23){
		$snm = "F3";
	}
	if($data[1]==24){
		$snm = "F4";
	}
	if($data[1]==25){
		$snm = "G1";
	}
	if($data[1]==26){
		$snm = "G2";
	}
	if($data[1]==27){
		$snm = "G3";
	}
	if($data[1]==28){
		$snm = "G4";
	}
	if($data[1]==29){
		$snm = "H1";
	}
	if($data[1]==30){
		$snm = "H2";
	}
	if($data[1]==31){
		$snm = "H3";
	}
	if($data[1]==32){
		$snm = "H4";
	}
	if($data[1]==33){
		$snm = "I1";
	}
	if($data[1]==34){
		$snm = "I2";
	}
	if($data[1]==35){
		$snm = "I3";
	}
	if($data[1]==36){
		$snm = "I4";
	}
	if($data[1]==37){
		$snm = "J1";
	}
	if($data[1]==38){
		$snm = "J2";
	}
	if($data[1]==39){
		$snm = "J3";
	}
	if($data[1]==40){
		$snm = "J4";
	}
	
	

	
	
	echo "<div class=\"col-lg-3\"> <a href=\"reserveinfo.php?sid=$data[1]&bid=$bid\"><button type=\"button\" class=\"btn btn-$btn btn-lg\" style=\"margin-bottom:20px; width: 200px;\">$snm</button></a></div>";
		
		




	}
?>
										
                     
                </div>
                <!-- /.col-lg-12 -->
            </div>
            

        </div>
        <!-- /#page-wrapper -->

   
<?php
 include ('footer.php');
 ?>
