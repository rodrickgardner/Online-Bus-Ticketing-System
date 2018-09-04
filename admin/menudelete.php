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
 
$bus = mysqli_fetch_array(mysqli_query($conms,"SELECT COUNT(*) FROM bus_info")); 



$tickets = mysqli_fetch_array(mysqli_query($conms,"SELECT COUNT(*) FROM seat_details")); 
$sold = mysqli_fetch_array(mysqli_query($conms,"SELECT COUNT(*) FROM seat_details WHERE status='1'")); 
$pend = mysqli_fetch_array(mysqli_query($conms,"SELECT COUNT(*) FROM seat_details WHERE status='2'")); 
 
 
 
 include ('header.php');
 ?>



    <div class="pageheader">
      <h2><i class="fa fa-cog"></i> Manage Slider</h2>
    </div>

    
    <div class="contentpanel">
      <div class="panel panel-default">

        <div class="panel-body">
		
		   
<?php


$did = $_GET["id"];

if($did!=1){

$res = mysqli_query($conms,"DELETE FROM menus WHERE id='".$did."'");

if($res){
	echo "<div class=\"alert alert-success alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Deleted Successfully!

</div>";
}else{
	echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Demo Version !! Cant Change!!

</div>";
}

}else{

	echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

HOME PAGE !! Cant DELETE!!

</div>";
}


?>	
		<meta http-equiv="refresh" content="2; url=menuview.php" />  
		  
		
	 </div>
	
    </div><!-- contentpanel -->
    
  </div><!-- mainpanel -->

  
</section>


<?php
 include ('include/footer.php');
 ?>


<script src="js/bootstrap-timepicker.min.js"></script>


<script src="js/wysihtml5-0.3.0.min.js"></script>
<script src="js/bootstrap-wysihtml5.js"></script>
<script src="js/ckeditor/ckeditor.js"></script>
<script src="js/ckeditor/adapters/jquery.js"></script>



<script>
jQuery(document).ready(function(){
    
    "use strict";
    
  // HTML5 WYSIWYG Editor
  jQuery('#wysiwyg').wysihtml5({color: true,html:true});
  
  // CKEditor
  jQuery('#ckeditor').ckeditor();
  
  jQuery('#inlineedit1, #inlineedit2').ckeditor();
  
  // Uncomment the following code to test the "Timeout Loading Method".
  // CKEDITOR.loadFullCoreTimeout = 5;

  window.onload = function() {
  // Listen to the double click event.
  if ( window.addEventListener )
	document.body.addEventListener( 'dblclick', onDoubleClick, false );
  else if ( window.attachEvent )
	document.body.attachEvent( 'ondblclick', onDoubleClick );
  };

  function onDoubleClick( ev ) {
	// Get the element which fired the event. This is not necessarily the
	// element to which the event has been attached.
	var element = ev.target || ev.srcElement;

	// Find out the div that holds this element.
	var name;

	do {
		element = element.parentNode;
	}
	while ( element && ( name = element.nodeName.toLowerCase() ) &&
		( name != 'div' || element.className.indexOf( 'editable' ) == -1 ) && name != 'body' );

	if ( name == 'div' && element.className.indexOf( 'editable' ) != -1 )
		replaceDiv( element );
	}

	var editor;

	function replaceDiv( div ) {
		if ( editor )
			editor.destroy();
		editor = CKEDITOR.replace( div );
	}

	 jQuery('#timepicker').timepicker({defaultTIme: false});
  jQuery('#timepicker2').timepicker({showMeridian: false});
  jQuery('#timepicker3').timepicker({minuteStep: 15});

	
	
});



</script>
</body>
</html>



