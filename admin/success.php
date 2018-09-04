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
                    <h1 class="page-header">EDIT Route</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                
                <div class="col-md-10 col-md-offset-1">
				
				
	

		<?php

if($_POST)
{


$bid = $_POST["bid"];
$pname = $_POST["pname"];
$pmobile = $_POST["pmobile"];
$splace = $_POST["splace"];
$dplace = $_POST["dplace"];
$name = $_POST['seats'];
$sss = $_POST['sss'];














foreach ($sss as $seats){
	

$res = mysqli_query($conms,"UPDATE seat_details SET  pname='".$pname."', pmobile='".$pmobile."', start='".$splace."', depart='".$dplace."', status='1' WHERE busid='".$bid."' AND seatid='".$seats."'");
if($res){


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
	


$ssee = "$seat , $ssee";

$aaaa = 1;

}else{
$ssee = "$ssee  $seat , ";
	$aaaa = 0;
}	
	

}


if($aaaa==1){
	
echo "<div class=\"alert alert-success alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>

SEATS $ssee Confirm Successfully </div>";


$ticket = mysqli_query($conms,"INSERT INTO ticket_details SET busid='".$bid."', pname='".$pname."', pmobile='".$pmobile."', start='".$splace."', depart='".$dplace."', seats='".$ssee."'");
if($ticket){
	
$tkt = mysqli_fetch_array(mysqli_query($conms,"SELECT id FROM ticket_details ORDER BY id DESC"));


echo "

<form action=\"print.php\" method=\"post\">

<input type=\"hidden\" name=\"tid\"value=\"$tkt[0]\" >
<input type=\"submit\" class=\"btn btn-success btn-lg\" value=\"PRINT TICKET\">
</form>
";

}else{
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
Problem With Ticket Generation. Contact System Admin....
</div>";
}








}else{
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>

SEATS $ssee  Can Not Confirm .. Please Try Again</div>";
}







} 
	?>
							
				
				
				

<?php
 include ('footer.php');
 ?>