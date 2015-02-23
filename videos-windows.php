
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include "inc/html_head.php"; ?>


<body>

<div id = "page">
<?php include "inc/header.php"; ?>

	<!-- main nav_bar -->
<?php 
$active_tab='video';
include "inc/top-tabs.php"; 
?>

	<!-- secondary nav_bar -->
<?php 
$selected_tab='windows';
$top_tab='videos';
include "inc/top-sub-tabs.php"; 
?>

	<!-- main page content -->
	<div id = "top_content">
		<div class = "youtube"><object><param name="movie" value="http://www.youtube.com/v/2bKJlmMaFBE&hl=en&fs=1"></param><param name="allowFullScreen" value="true"></param><embed src="http://www.youtube.com/v/2bKJlmMaFBE&hl=en&fs=1&autoplay=1" type="application/x-shockwave-flash" allowfullscreen="true" height="278" width="344"></embed></object></div>
		<h2>Windows Installation Video</h2>
		<p>Our Energy Star rated windows will not only save you money on heating and cooling, but will brighten your home in new ways every day.<BR><BR> Click the Windows Tab below to view more information about the quality and selection of windows available for installation.</p>
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