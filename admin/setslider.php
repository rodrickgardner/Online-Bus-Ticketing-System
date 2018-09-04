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

if($_POST)
{

$title = $_POST["title"];
$btext = $_POST["btext"];



// IMAGE UPLOAD //////////////////////////////////////////////////////////
	$folder = "../img/slider/";
	$extention = strrchr($_FILES['bgimg']['name'], ".");
	$new_name = time();
	$bgimg = $new_name.'.jpg';
	$uploaddir = $folder . $bgimg;
	move_uploaded_file($_FILES['bgimg']['tmp_name'], $uploaddir);
//////////////////////////////////////////////////////////////////////////


$res = mysqli_query($conms,"INSERT INTO sliders SET img='".$bgimg."'");

if($res){
	echo "<div class=\"alert alert-success alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Added Successfully!

</div>";
}else{
	echo "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>	

Some Problem Occurs, Please Try Again. 

</div>";
}
}

?>	
		
		
		
				
		<form name="" id="" action="" method="post" enctype="multipart/form-data" >
	            <div class="form-group">
              <label class="col-sm-3 control-label"></label>
              <div class="col-sm-6"><input name="title" value="" class="form-control" type="hidden" placeholder="http://"></div>
            </div>
			
              <div class="form-group">
              <label class="col-sm-3 control-label">IMAGE</label>
              <div class="col-sm-6"><input name="bgimg" type="file" id="bgimg" /></div>
            </div>
			  
		
		  
				<div class="col-sm-6 col-sm-offset-3"><br/>
				  <button class="btn btn-primary btn-block">UPLOAD</button><br/><br/>
				</div>
			
			 
			 
          </form>
		  
		  
		  <div class="clearfix"></div>
		  
			
		  
		  
		  				<?php

$ddaa = mysqli_query($conms,"SELECT id, img FROM sliders ORDER BY id");
    echo mysqli_error($conms);
    while ($data = mysqli_fetch_array($ddaa))
    {									
 echo "
 
              <label class=\"col-sm-3 control-label\"></label>
 <div class=\"col-sm-8\">
 <img src=\"../img/slider/$data[1]\" alt=\"IMG\"  height=\"100\" width=\"400\">
 <a class=\"btn btn-danger btn-lg\" href=\"delslider.php?id=$data[0]\">Delete</a><br/><br/><br/>
 </div>
 	";
	}
?>
				
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



