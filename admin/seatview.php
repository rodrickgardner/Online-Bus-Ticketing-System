<?php
require_once('function.php');
connectdb();
session_start();

if (!is_user()) {
	redirect('index.php');
}

?>


<style>



.toggle-btn-grp { 
    margin:3px 0; 
}
.toggle-btn { 
    text-align:centre; 
    margin:5px 2px;
    padding:0.4em 3em; 
    color:#000; 
    background-color:#FFF; 
    border-radius:10px; 
    display:inline-block; 
    border:solid 1px #CCC; 
    cursor:pointer;
}

.toggle-btn-grp.joint-toggle .toggle-btn { 
    margin:5px 0; 
    padding:0.4em 2em; 
    border-radius:0;
    border-right-color:white;
}
.toggle-btn-grp.joint-toggle .toggle-btn:first-child { 
    margin-left:2px; 
    border-radius: 10px 0px 0px 10px; 
}
.toggle-btn-grp.joint-toggle .toggle-btn:last-child { 
    margin-right:2px;  
    border-radius: 0px 10px 10px 0px;
    border-right:solid 1px #CCC;
}


.toggle-btn:hover { 
    border:solid 1px #a0d5dc !important; 
    background:#f1fdfe;
}


.toggle-btn.success { 
    background:lightgreen;
    border:solid 1px green !important; 
}


.visuallyhidden { 
    border: 0; 
    clip: rect(0 0 0 0); 
    height: 1px; 
    margin: -1px; 
    overflow: hidden; 
    padding: 0; 
    position: absolute; 
    width: 1px; 
}
.visuallyhidden.focusable:active, .visuallyhidden.focusable:focus { 
    clip: auto; 
    height: auto; 
    margin: 0; 
    overflow: visible; 
    position: static; 
    width: auto; 
}


/* CSS only version */
.toggle-btn-grp.cssonly * {
    width:140px;
    height:30px;
    line-height:30px;
}
.toggle-btn-grp.cssonly div {
    display:inline-block;
    position:relative;
    margin:5px 2px;
}

.toggle-btn-grp.cssonly div label {
    position:absolute;
    z-index:0;
    padding:0;
    text-align:center;
}

.toggle-btn-grp.cssonly div input {
    position:absolute;
    z-index:1;
    cursor:pointer;
    opacity:0;
}

.toggle-btn-grp.cssonly div:hover label {
    border:solid 1px #a0d5dc !important; 
    background:#f1fdfe;
}

.toggle-btn-grp.cssonly div input:checked + label {
    background:lightgreen;
    border:solid 1px green !important; 
}

.toggle-btn-grp.cssonly div input:disabled + label {
	
    background:red;
    border:solid 1px red !important; 
	
}

.toggle-btn-grp.cssonly.shaon div input:disabled + label {
	
    background:yellow;
    border:solid 1px red !important; 
	
}






</style>   
  

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
                    <h1 class="page-header">SEAT VIEW</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			
			
<form method="post" action="books.php">			
			<div class="row">
                <div class="col-lg-12">
				<div class="col-lg-12">
				<div class="pull-right">Select Seats and Press Next.<br><input type="submit" class="btn btn-lg btn-success btn-block" value="Next"/>
				
				
				</div>
<?php

$bid = $_GET["bid"];


$buss = mysqli_query($conms,"SELECT id, route, time, date, seat FROM bus_info WHERE id='".$bid."'");
    echo mysqli_error($conms);
    while ($datas = mysqli_fetch_array($buss))
    {
		$rname = mysqli_fetch_array(mysqli_query($conms,"SELECT routename FROM bus_route WHERE id='".$datas[1]."'"));
		
		echo "<b>Bus ID: $datas[0]<br>Route: $rname[0]<br>Date: $datas[3]<br>Time: $datas[2]<br>Total Seats: $datas[4]</b><hr>";
	}
?>


<input type="hidden" id="datepicker" value="<?php echo $bid; ?>" placeholder="Set Date" name="bid">

                </div>
                    
<?php

$bid = $_GET["bid"];


$buss = mysqli_query($conms,"SELECT id, route, time, date, seat FROM bus_info WHERE id='".$bid."'");
    echo mysqli_error($conms);
    while ($datas = mysqli_fetch_array($ddaa))
    {
		echo "$datas[0]";
	}






$ddaa = mysqli_query($conms,"SELECT id, seatid, status FROM seat_details WHERE busid='".$bid."' ORDER BY id");
    echo mysqli_error($conms);
    while ($data = mysqli_fetch_array($ddaa))
    {


$sold = mysqli_fetch_array(mysqli_query($conms,"SELECT status FROM seat_details WHERE id='".$data[0]."'"));


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
	
	
if($sold[0]==1){
	$btn = "disabled";
	$snm = "$snm Sold";	
	$sty = "";
}else if($sold[0]==2){
	$btn = "disabled";
	$snm = "$snm Pending";
	$sty = "shaon";
}else{
	$btn = "";
		$sty = "";
	}
	
	
	
	
	echo "<div class=\"col-lg-3\">
	<div class=\"toggle-btn-grp cssonly $sty\" id=\"seat\"> 
	<div><input type=\"checkbox\" name=\"seats[]\" value=\"$data[1]\" $btn/>
	<label onclick=\"\" class=\"toggle-btn\" >$snm</label>
	</div></div></div>";
		
		




	}
?>
								
 </form>                    
                </div>
                <!-- /.col-lg-12 -->
            </div>
            

        </div>
        <!-- /#page-wrapper -->

 <?php
 include ('footer.php');
 ?>
