
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
    <h2>Transline Classic Ticket Confirmation</h2>
</div>
</div>
<!-- banner -->




<div class="container">
<div class="spacer">
<center><h3>Confirm Your Ticket</h3></center><hr>
<div class="row register">
	<form method="post" action="success.php">		
<div class="row">
                <<div class="col-lg-12">
				<div class="col-lg-12">
	<div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">			
<?php
$bid = $_POST["bid"];

$buss = mysqli_query($conms,"SELECT id, route, time, date, seat FROM bus_info WHERE id='".$bid."'");
    echo mysqli_error($conms);
    while ($datas = mysqli_fetch_array($buss))
    {
		$rname = mysqli_fetch_array(mysqli_query($conms,"SELECT routename FROM bus_route WHERE id='".$datas[1]."'"));
		
		echo "<b>Bus ID: $datas[0]<br>Route: $rname[0]<br>Date: $datas[3]<br>Time: $datas[2]<br>Total Seats: $datas[4]<br>";
	}
	
	
$name = $_POST['seats'];



$total = 0;


echo "Selected Seats: ";
foreach ($name as $seats){

	
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
	
	$taka= 400;
$total= $total+ $taka;
	
echo "<input type=\"hidden\" value=\"$seats\"  name=\"sss[]\">";
	
	
echo $seat.",";
}

$usids = mysqli_fetch_array(mysqli_query($conms,"SELECT id, name, mobile FROM users WHERE username='".$user."'"));




echo "<br>Total Cost: $total";


?>
</b>
<hr>

<input type="hidden" value="<?php echo $bid; ?>" placeholder="Set Date" name="bid">

             
				
				
 
 
 

 
 <label>Passenger's Name</label><input class="form-control" placeholder="Passenger's Name" name="pname" value="<?php echo $usids[1]; ?>" type="text">
	<label>Passenger's Mobile</label><input class="form-control" placeholder="Passenger's Mobile" value="<?php echo $usids[2]; ?>" name="pmobile" type="text">
	<!--label>Passenger's Email</label><input class="form-control" placeholder="Passenger's Email" name="pemail" type="text"-->
	<label>Start Place</label><input class="form-control" placeholder="Start Place" name="splace" type="text">
	<label>Depart Place</label><input class="form-control" placeholder="Depart Place" name="dplace" type="text"><br>
		<input type="submit" class="btn btn-lg btn-success btn-block" value="Confirm"/>						
 </form>  
                <!-- /.col-lg-12 -->
            </div>
</div>
</div>
</div></div></div></div>
	<?php
		//echo "Welcome $user !!!<br/>";
		?>
<?php include'footer.php';?>