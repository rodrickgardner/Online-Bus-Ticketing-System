<?php
require_once('../admin/function.php');
connectdb();
session_start();

$ttl = mysqli_fetch_array(mysqli_query($conms,"SELECT sitename, email, mobile FROM general_setting WHERE id='1'"));

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Define Charset -->
	<meta charset="utf-8"/>

	<!-- Page Title -->
	<title><?php echo $ttl[0]; ?></title>

	<!-- Responsive Metatag -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	  
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=9" />-->
	


	<!-- CSS -->
	 <link rel="stylesheet" href="<?php echo $baseurl; ?>/css/vendors/bootstrap.min.css"> 

	<!-- Font icons -->
	 <link rel="stylesheet" href="<?php echo $baseurl; ?>/css/vendors/fontello.css" > 
	<!--[if IE 7]>
	<link rel="stylesheet" href="<?php echo $baseurl; ?>/css/fontello-ie7.css" ><![endif]-->
	
	<!-- Carousel -->
	 <link rel="stylesheet" href="<?php echo $baseurl; ?>/js/vendors/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo $baseurl; ?>/js/vendors/owl-carousel/owl.theme.css">
 
	<!-- Animate.css -->
	 <link rel="stylesheet" href="<?php echo $baseurl; ?>/css/vendors/animate.css"> 

	<!-- Custom CSS -->
	 <link rel="stylesheet" href="<?php echo $baseurl; ?>/css/styles.css" /> 
	<!-- Custom Media-Queties -->
	 <link rel="stylesheet" href="<?php echo $baseurl; ?>/css/media-queries.css" /> 

	<!-- Player -->
	 <link rel="stylesheet" href="<?php echo $baseurl; ?>/css/YTPlayer.css" > 
<style>
.nav .active { color: #d6ac22 };
</style>


	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>        
	<![endif]-->

	<!-- Media queries -->
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
	