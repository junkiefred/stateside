
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include "inc/html_head.php"; ?>


<body>

<div id = "page">
<?php include "inc/header.php"; ?>

	<!-- main nav_bar -->
<?php 
$active_tab='0';
include "inc/top-tabs.php"; 
?>
	<!-- secondary nav_bar -->
	<!--div id = "top_subnavx">							
	</div-->

	<!-- main page content -->
	<div id = "top_content">
		<h1>Contact Us - <?php echo $company_name; ?></h1>
		<p>You can contact us for any reason - but don't forget we always offer Free In-Home Estimates!</p>
		<p><?php echo $company_name; ?><br />
		477 Andrews Avenue<br />Glenolden, PA 19036</p>
		<p>Email us at:<a href = "mailto:<?php echo $company_email; ?>"><?php echo $compnay_email; ?></a><br/>Office:  <?php echo $company_phone; ?></p>
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