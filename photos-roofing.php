
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include "inc/html_head.php"; ?>


<body>

<div id = "page">
<?php include "inc/header.php"; ?>

	<!-- main nav_bar -->
<?php 
$active_tab='photos';
include "inc/top-tabs.php"; 
?>
	<!-- secondary nav_bar -->
<?php 
$selected_tab='roofing';
$top_tab='photos';
include "inc/top-sub-tabs.php"; 
?>

	<!-- main page content -->
	<div id = "top_content">				
		<embed type="application/x-shockwave-flash" src="http://picasaweb.google.com/s/c/bin/slideshow.swf" flashvars="host=picasaweb.google.com&RGB=0x76A6CE&feed=http%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2FDeschaineRoofing2008%2Falbumid%2F5221737586223794161%3Fkind%3Dphoto%26alt%3Drss" pluginspage="http://www.macromedia.com/go/getflashplayer" width="350" height="278" style="float:left;margin:15px 20px 0 0;border:1px solid #333;"></embed>
	<h2>Roofing Job Photos</h2>
	<p>Check out some of completed roofing jobs, and before-and-after photos in this slideshow. Contact <a href="contact-us.php">Stateside Exteriors</a> for fast, quality roof installation. Choose between 3tab and dimensional shingles, for the best-looking roof in the neighborhood! <br/><br/>Learn more about our roofing products and services by clicking the Roofing tab below.</p>
	<?php include "inc/free-estimate-link.php" ?>
	</div>
	
	<div id = "top_foot"></div>
	
<!--  ================================  BOTTOM FREE ESTIMATES  SECTION ==========================================  -->

	

<!-- bottom main nav bar -->
<?php 
$active_btab = "none";
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


<?php include 'inc/footer.php'; ?>
</body>
</html>