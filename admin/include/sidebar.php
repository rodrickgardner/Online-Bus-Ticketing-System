
<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>

  <div class="leftpanel">

    <div class="logopanel">
        <h1><span>[</span>INVENTORY<span>]</span></h1>
    </div><!-- logopanel -->

    <div class="leftpanelinner">

        <!-- This is only visible to small devices -->
        <div class="visible-xs hidden-sm hidden-md hidden-lg">

            <h5 class="sidebartitle actitle">Account</h5>
            <ul class="nav nav-pills nav-stacked nav-bracket mb30">
              <li><a href="changepass.php"><i class="fa fa-cog"></i> <span>Account Settings</span></a></li>
              <li><a href="signout.php"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
            </ul>
        </div>

      <h5 class="sidebartitle">Navigation</h5>
      <ul class="nav nav-pills nav-stacked nav-bracket">
	  
	  
	  <?php
  if($user!="admin"){


	  ?>
	  
	    <li><a href="home.php"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        
        <li><a href="listproduct.php"><i class="glyphicon glyphicon-list-alt"></i> <span>Product List</span></a></li>
		
		
        <li><a href="watchrcv.php"><i class="glyphicon glyphicon-time"></i> <span>Receive Watch</span></a></li>
        <li><a href="listwatchrcv.php"><i class="glyphicon glyphicon-list-alt"></i> <span>Receive Watch List</span></a></li>

		
        <li><a href="rcvparts.php"><i class="fa fa-cogs"></i> <span>Receive Spare Parts</span></a></li>
        <li><a href="invoicegen.php"><i class="glyphicon glyphicon-file"></i> <span>Generate Invoice</span></a></li>
        <li><a href="listinvoice.php"><i class="glyphicon glyphicon-list"></i> <span>View Invoice</span></a></li>
		
  
	  
		  <?php
}else{


	  ?>  
	  
        <li><a href="home.php"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        
		<li> <button class="btn btn-block btn-success-alt">Product Category</button> </li>
		
		<li><a href="addcat.php"><i class="fa fa-edit"></i> <span>Add Category</span></a></li>
        <li><a href="listcat.php"><i class="glyphicon glyphicon-list-alt"></i> <span>Category List</span></a></li>
		
				<li> <button class="btn btn-block btn-info">In Stock</button> </li>
		<li><a href="addproduct.php"><i class="fa fa-edit"></i> <span>Add Product</span></a></li>
        <li><a href="listproduct.php"><i class="glyphicon glyphicon-list-alt"></i> <span>Product List</span></a></li>
		        <li><a href="rcvparts.php"><i class="fa fa-cogs"></i> <span>Receive Spare Parts</span></a></li>
		
		
				<li> <button class="btn btn-block btn-primary"> Service Repair</button> </li>
        <li><a href="watchrcv.php"><i class="glyphicon glyphicon-time"></i> <span>Receive Watch</span></a></li>
        <li><a href="listwatchrcv.php"><i class="glyphicon glyphicon-list-alt"></i> <span>Receive Watch List</span></a></li>

		
				<li> <button class="btn btn-block btn-danger">Billing Manager</button> </li>
        <li><a href="invoicegen.php"><i class="glyphicon glyphicon-file"></i> <span>Generate Invoice</span></a></li>
        <li><a href="listinvoice.php"><i class="glyphicon glyphicon-list"></i> <span>View Invoice</span></a></li>
		
		
				<li> <button class="btn btn-block btn-warning">Showroom Manager</button> </li>
		<li><a href="addshowroom.php"><i class="fa fa-edit"></i> <span>Add Showroom</span></a></li>
        <li><a href="listshowroom.php"><i class="glyphicon glyphicon-list-alt"></i> <span>Showroom List</span></a></li>
		
		
				<li> <button class="btn btn-block btn-lightblue">Employe Section</button> </li>
		<li><a href="addsales.php"><i class="fa fa-user"></i> <span>Add Sales Man</span></a></li>
		<li><a href="listsales.php"><i class="fa fa-users"></i> <span>Sales Man List</span></a></li>

		

				  <?php
}


	  ?>  

      </ul>

      

    </div><!-- leftpanelinner -->
  </div><!-- leftpanel -->

  <div class="mainpanel">

    <div class="headerbar">

      <a class="menutoggle"><i class="fa fa-bars"></i></a>


      <div class="header-right">
        <ul class="headermenu">
          <li>
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">

<?php
echo "<img src=\"../uid.png" alt=\"\" />";
echo " $user";
?>
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
              <li><a href="changepass.php"><i class="fa fa-cog"></i> <span>Account Settings</span></a></li>
              <li><a href="signout.php"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
              </ul>
            </div>
          </li>

        </ul>
      </div><!-- header-right -->

    </div><!-- headerbar -->
