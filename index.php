
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include "inc/html_head.php"; ?>


<body>

<div id = "page">
<?php include "inc/header.php"; ?>

	<!-- main nav_bar -->
<?php 
$active_tab='none';
include "inc/top-tabs.php"; 
?>

	<!-- secondary nav_bar -->
	<!--div id = "top_subnavx">							
	</div-->

	<!-- main page content -->
	<div id = "top_content">				
		<img src = "img/metalroof1.jpg" class = "stdl" alt = "Maine Metal Roof Installation" style = "width:280px;height:271px;"/>
		<div style = "margin:10px 0px 3px 0px;float:right;">		</div>
		<h2><?php echo $company_name; ?></h2>
		<p>Danny Martino has been working as a local roofing contractor installing new roofs Vinyl siding, replacement windows & seamless gutters for over 35 years.</p>
		<p>John Lawler has been working as a local roofing contractor installing new roofs Vinyl siding, replacement windows & seamless gutters for over 35 years.</p>
		<p>We have a great reputation for high quality workmanship. <strong>Our workmanship is the highest quality in the Daleware Valley - Fill out the form below or call us to schecule your Free Estimate.</strong></p>
        <center>
	       	<!--a href = "brochures/index.php" target="_blank"><img src = "img/david-deschaine-roofing-brochures.jpg" style="border:0px;" /></a>
		    <a href = "brochures/warranty.php" target="_blank"><img src = "img/david-deschaine-roofing-warranty.jpg" style="border:0px;" /></a-->
        </center>
	</div>
	
	<!-- floating video -->
	<div id = "top_foot">
		<!-- include floating video code here -->
	</div>
	
<!--  ================================  BOTTOM FREE ESTIMATES  SECTION ==========================================  -->

	

<!-- bottom main nav bar -->
<?php 
$active_btab = "estimate";
include "inc/bottom-tabs.php"; 
?>

	<!-- bottom secondary nav bar -->
	<div id = "bot_subnavx">							
	</div>
	<!-- bottom content -->
	<div id = "bot_content">
	<?php include "inc/estimate-form.php"; ?>
	</div>
	

	<div id = "bot_foot"></div>


<?php include 'inc/footer.php'; ?></body>
</html>