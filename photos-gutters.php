
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
$selected_tab='gutters';
$top_tab='photos';
include "inc/top-sub-tabs.php"; 
?>

	<!-- main page content -->
	<div id = "top_content">				
		<embed type="application/x-shockwave-flash" src="http://picasaweb.google.com/s/c/bin/slideshow.swf" flashvars="host=picasaweb.google.com&RGB=0x76A6CE&feed=http%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2FDeschaineRoofing2008%2Falbumid%2F5221745718946796849%3Fkind%3Dphoto%26alt%3Drss" pluginspage="http://www.macromedia.com/go/getflashplayer" width="350" height="278" style="float:left;margin:15px 20px 0 0;border:1px solid #333;"></embed>
				<h2>Gutter Job Site Photos</h2>
				<p>Check out our seamless gutter systems photos. Our expert installers custom make your gutters right at your home to provide leak-free gutters made from solid aluminum. Call Stateside Exteriors for fast, professional installation of the most attractive and reliable gutters anywhere. With so many color choices, our Seamless Gutters will add value to your home and protect you from water damage and slippery, icy steps and walkways.<br><br>Learn more about Stateside Exteriors  Seamless Gutters by clicking the Gutters tab below.</p>
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