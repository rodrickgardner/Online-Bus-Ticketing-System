<?php
require_once('function.php');
connectdb();
// session_start();




$today =  date("m/d/Y");

$ddaa = mysqli_query($conms,"SELECT id, route, time, seat FROM bus_sch ORDER BY id");
    echo mysqli_error($conms);
    while ($data = mysqli_fetch_array($ddaa))
    {
///------------------------------------------------------------------>>TODAY
$a=strtotime("$data[2] $today ");
$d = $a;
$busdt = date("m/d/Y", $d);


$ache = mysqli_fetch_array(mysqli_query($conms,"SELECT COUNT(*) FROM bus_info WHERE route='".$data[1]."' AND tms='".$d."'"));
if($ache[0]==0){


$res = mysqli_query($conms,"INSERT INTO bus_info SET route='".$data[1]."', time='".$data[2]."', date='".$busdt."', seat='".$data[3]."', tms='".$d."'");

if($res){
$bid = mysqli_fetch_array(mysqli_query($conms,"SELECT id FROM bus_info ORDER BY id DESC"));
$i=1;

while($i<=$data[3]){
mysqli_query($conms,"INSERT INTO seat_details SET  busid='".$bid[0]."', seatid='".$i."', status='0'");
$i++;
}
}


}
//----------------------------------------------------------------->> TODAY




///------------------------------------------------------------------>>TODAY+1

$d = $a+24*60*60;
$busdt = date("m/d/Y", $d);


$ache = mysqli_fetch_array(mysqli_query($conms,"SELECT COUNT(*) FROM bus_info WHERE route='".$data[1]."' AND tms='".$d."'"));
if($ache[0]==0){


$res = mysqli_query($conms,"INSERT INTO bus_info SET route='".$data[1]."', time='".$data[2]."', date='".$busdt."', seat='".$data[3]."', tms='".$d."'");

if($res){
$bid = mysqli_fetch_array(mysqli_query($conms,"SELECT id FROM bus_info ORDER BY id DESC"));
$i=1;

while($i<=$data[3]){
mysqli_query($conms,"INSERT INTO seat_details SET  busid='".$bid[0]."', seatid='".$i."', status='0'");
$i++;
}
}


}
//----------------------------------------------------------------->> TODAY+1




///------------------------------------------------------------------>>TODAY+2

$d = $a+48*60*60;
$busdt = date("m/d/Y", $d);


$ache = mysqli_fetch_array(mysqli_query($conms,"SELECT COUNT(*) FROM bus_info WHERE route='".$data[1]."' AND tms='".$d."'"));
if($ache[0]==0){


$res = mysqli_query($conms,"INSERT INTO bus_info SET route='".$data[1]."', time='".$data[2]."', date='".$busdt."', seat='".$data[3]."', tms='".$d."'");

if($res){
$bid = mysqli_fetch_array(mysqli_query($conms,"SELECT id FROM bus_info ORDER BY id DESC"));
$i=1;

while($i<=$data[3]){
mysqli_query($conms,"INSERT INTO seat_details SET  busid='".$bid[0]."', seatid='".$i."', status='0'");
$i++;
}
}


}
//----------------------------------------------------------------->> TODAY+2




///------------------------------------------------------------------>>TODAY+3

$d = $a+72*60*60;
$busdt = date("m/d/Y", $d);


$ache = mysqli_fetch_array(mysqli_query($conms,"SELECT COUNT(*) FROM bus_info WHERE route='".$data[1]."' AND tms='".$d."'"));
if($ache[0]==0){


$res = mysqli_query($conms,"INSERT INTO bus_info SET route='".$data[1]."', time='".$data[2]."', date='".$busdt."', seat='".$data[3]."', tms='".$d."'");

if($res){
$bid = mysqli_fetch_array(mysqli_query($conms,"SELECT id FROM bus_info ORDER BY id DESC"));
$i=1;

while($i<=$data[3]){
mysqli_query($conms,"INSERT INTO seat_details SET  busid='".$bid[0]."', seatid='".$i."', status='0'");
$i++;
}
}


}
//----------------------------------------------------------------->> TODAY+3

}


//------------------------->>>>>>>>>>>>>>>>bus expired
$current = time();

$ddaa = mysqli_query($conms,"SELECT id, tms FROM bus_info ORDER BY id");
    echo mysqli_error($conms);
    while ($data = mysqli_fetch_array($ddaa))
    {
if($data[1]<= $current){

mysqli_query($conms,"UPDATE bus_info SET exp='1' WHERE id='".$data[0]."'");



}


}




?>
		