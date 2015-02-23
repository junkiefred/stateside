
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
$selected_tab='windows';
$top_tab='photos';
include "inc/top-sub-tabs.php"; 
?>

	<!-- main page content -->
	<div id = "top_content">				
		<embed type="application/x-shockwave-flash" src="http://picasaweb.google.com/s/c/bin/slideshow.swf" flashvars="host=picasaweb.google.com&RGB=0x76A6CE&feed=http%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2FDeschaineRoofing2008%2Falbumid%2F5221747677207425649%3Fkind%3Dphoto%26alt%3Drss" pluginspage="http://www.macromedia.com/go/getflashplayer" width="350" height="278" style="float:left;margin:15px 20px 0 0;border:1px solid #333;"></embed>
				<h2>Windows Job Site Photos</h2>
				<p>Check out our completed Energy Saver Window jobs. Our professional installers take great care to ensure your windows match your home. Call Stateside Exteriors for fast, professional installation of the best in replacement windows. With so many style choices and optional features, enjoy beautiful and convenient windows for years to come!
				<br><br>Learn more about Stateside Exterior Energy Saver windows by clicking the Windows tab below.</p>
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