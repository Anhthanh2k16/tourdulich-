<div id="wraper">
    <?php
	 include_once _template."layout/header.php";
	 include_once _template."layout/menu.php";
	 include_once _template."layout/menu_sp.php";
	 ?>
	<div id="wp-slide">
	     <div id="slide"><?php include_once _template."layout/slider.php";?></div>
		  <?php include_once _template."layout/slidetin.php";?> 
	</div>
	<div id="wp-content">
	   <?php include_once _template.$template."_tpl.php";?>
	   <?php include_once _template."layout/right.php";?> 
	</div>
	  <?php include_once _template."layout/footer.php"; ?>
</div>