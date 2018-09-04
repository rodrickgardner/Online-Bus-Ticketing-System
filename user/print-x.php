<?php
 //Set the Content Type
  header('Content-type: image/jpeg');

  // Create Image From Existing File
  $jpg_image = imagecreatefromjpeg('tkt.jpg');

  // Allocate A Color For The Text
  $color = imagecolorallocate($jpg_image, 25, 136, 76);

  // Set Path to Font File
  $font_path = 'arial.ttf';

  // Set Text to Be Printed On Image
  
  
  
 require_once('../admin/function.php');
  //require_once('fpdf.php');


connectdb();
session_start();

$tid = $_GET["cid"];

$tkt = mysqli_fetch_array(mysqli_query($conms,"SELECT id, busid, pname, pmobile, start, depart, seats, status FROM ticket_details WHERE id='".$tid."'"));


$busdtls = mysqli_fetch_array(mysqli_query($conms,"SELECT route, time, date FROM bus_info WHERE id='".$tkt[1]."'"));

$route = mysqli_fetch_array(mysqli_query($conms,"SELECT routename FROM bus_route WHERE id='".$busdtls[0]."'"));

  $tnum = $tkt[0];
  $date = $busdtls[2];
  $tm = $busdtls[1];
  $route = $route[0];
  $st = $tkt[4];
  $dp = $tkt[5];
  $seats = $tkt[6];
  $name = $tkt[2];
  $phn = $tkt[3];
  $status = $tkt[7];
 $auth="";
 if($status==2){
	  
	  $auth ="Status: Pending";
	  
  } else if($status==1){
	  
	  $auth ="Status: Authorized";
	  
  }

/*
echo "$tnum<br/><br/> $date<br/>$tm<br/>$route<br/>$st<br/>$dp<br/> $seats<br/> $name<br/>$phn<br/> $auth";
*/


  


  // Print Text On Image
  imagettftext($jpg_image, 32, 0, 1300, 122, $color, $font_path, $tnum);
  imagettftext($jpg_image, 32, 0, 180, 255, $color, $font_path, $date);
  imagettftext($jpg_image, 32, 0, 1000, 255, $color, $font_path, $tm);
  imagettftext($jpg_image, 32, 0, 180, 364, $color, $font_path, $route);
  imagettftext($jpg_image, 32, 0, 720, 364, $color, $font_path, $st);
  imagettftext($jpg_image, 32, 0, 1210, 364, $color, $font_path, $dp);
  imagettftext($jpg_image, 32, 0, 180, 470, $color, $font_path, $seats);
  imagettftext($jpg_image, 32, 0, 190, 590, $color, $font_path, $name);
  imagettftext($jpg_image, 32, 0, 1100, 590, $color, $font_path, $phn);
  imagettftext($jpg_image, 22, 0, 1150, 165, $color, $font_path, $auth);


  //shows the image
  imagejpeg($jpg_image);


  // Save the image as 'simpletext.jpg'
imagejpeg($jpg_image, "tickets/ticket No. $tnum.jpg");

  $file = "tickets/ticket No. $tnum.jpg";
if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
}

 // Clear Memory
  imagedestroy($jpg_image);
?> 