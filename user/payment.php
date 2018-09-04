

<?php


 include ('header.php');
 if (is_user()) {

$usid = mysqli_fetch_array(mysqli_query($conms,"SELECT id FROM users WHERE username='".$user."'"));
 $uid = $usid[0];
 
 }

 ?>

<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="#">Home</a> / About Us</span>
    <h2>Transline Classic Ticket Confirmation</h2>
</div>
</div>
<!-- banner -->




<div class="container">
<div class="spacer">
<center><h3>Confirm Your Ticket</h3></center><hr>
<div class="row register">
<div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">		
			<?php

if($_POST)
{


$bid = $_POST["bid"];
$txn = $_POST["txn"];
// $name = $_POST['seats'];
$ssss = $_POST['ssss'];


$ssee = "";
$seats = "";


foreach ($ssss as $seats){
	

$res = mysqli_query($conms,"UPDATE seat_details SET trxid='".$txn."' WHERE busid='".$bid."' AND seatid='".$seats."'");
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


Your Seats $ssee Confirmed Successfully. Thank you. </div>";





///////------------------------------------------------------->>>>>\\






/*

######################## ID auto Increament

User Details==>> name mobile start depart

Seates 


*/




	
$tkt = mysqli_fetch_array(mysqli_query($conms,"SELECT id FROM ticket_details ORDER BY id DESC"));


echo "

<a href=\"print.php?cid=$tkt[0]\"><button type=\"button\" class=\"btn btn-success btn-xs\">Print This Ticket</button></a><br><br>
<a href=\"mytickets.php\"><button type=\"button\" class=\"btn btn-success btn-xs\">My Tickets</button></a>
";








}else{
echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>

Your Seats $ssee  Can Not Confirm .. Please Try Again</div>";
}







} 
	?>
	

	
	
		
</div></div></div></div>
	<?php
		//echo "Welcome $user !!!<br/>";
		?>
<?php include'footer.php';?>