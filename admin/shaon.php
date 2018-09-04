<?php
require_once('function.php');
connectdb();
session_start();
$bid = $_GET["bid"];
header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=Pabna_express_Bus_id-$bid.doc");

echo "<html>";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";
echo "<body>";


?>



<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0; width: 900px;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:5px 10px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal; width: 150px;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 20px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg .tg-s6z2{text-align:center}
</style>





<?php




$buss = mysqli_query($conms,"SELECT id, busid, seatid, pname, pmobile, start, depart, trxid, status FROM seat_details WHERE busid='".$bid."'");
    echo mysqli_error($conms);
    while ($datas = mysqli_fetch_array($buss))
    {



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
	


echo "<b><table class=\"tg\">
  <tr>
    <td class=\"tg-s6z2\">Seat No: $seat</td>
    
    <td class=\"tg-s6z2\">P. Name: $datas[3]</td>
    <td class=\"tg-s6z2\">P. Mobile: $datas[4]</td>
    <td class=\"tg-s6z2\">Start: $datas[5]</td>
    <td class=\"tg-s6z2\">Depart: $datas[6]</td>
    
   
   
  </tr></b></table>";





	}




echo "</body>";




echo "</html>";




?>