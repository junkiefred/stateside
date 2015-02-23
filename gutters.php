
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
	<div id = "top_contentx">				
		<h2>Get a Free Estimate, Today!</h2>
		<p>Submit our simple 5-Minute request to receive your <br/><b>Free, No-Obligation In-Home Home Improvement Estimate.</b></p>
		<?php include "inc/free-estimate-link.php" ?>		
	</div>

	
	<!-- floating video -->
	<div id = "top_foot">
		<!-- include floating video code here -->
	</div>
	
<!--  ================================  BOTTOM FREE ESTIMATES  SECTION ==========================================  -->

<!-- bottom main nav bar -->
<?php 
$active_btab = "windows";
include "inc/bottom-tabs.php"; 
?>

	<!-- bottom secondary nav bar -->
	<div id = "bot_subnavx">							
	</div>
	<!-- bottom content -->
	<div id = "bot_content">
		<script type="text/javascript" src="http://www.theroofjob.com/vid/swfobject.js"></script>
		<div id="swfplayer">
			<script type="text/javascript">
				var so = new SWFObject('http://www.theroofjob.com/vid/mediaplayer.swf','mpl','335','250','8');
					so.addParam('allowscriptaccess','always');
					so.addParam('allowfullscreen','true');
					so.addVariable('autostart', 'true');
					so.addVariable('height','250');
					so.addVariable('width','335');
					so.addVariable('file','http://www.theroofjob.com/vid/gutternew.flv&image=http://www.theroofjob.com/img/davemov.jpg');
					so.write('swfplayer');
			</script>	
		</div>
		<h1>Seamless Gutters</h1>
		<p><?php echo $company_name; ?> has been installing roofing, siding and gutters for Maine homeowners for a quarter-century.</p>
		<p>Protect your home from water damage by preventing water from sitting against your foundation and leaking into your basement.</p>
		<p>Whether you are installing new gutters onto your home or replacing old ones, there are a variety of reasons to choose Deschaine Seamless Gutters. <strong>Our Seamless Gutters will never leak and will stand up to harsh Maine winters. Keep ice off your walkways and stairs, and protect your friends and family.</strong></p>
        <p>You can schedule your appointment today by filling out or Free No-Obligation Estimate form, and one of our friendly office staff will contact you ASAP!.</p>

		<?php include "inc/free-estimate-link.php" ?>
	</div>
	

	<div id = "bot_foot"></div>

<?php include 'inc/footer.php'; ?></body>
</html>