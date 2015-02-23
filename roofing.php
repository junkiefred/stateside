
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
$active_btab = "roofing";
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
				so.addVariable('file','http://www.theroofjob.com/vid/roofingnew.flv&image=http://www.theroofjob.com/vid/davemov.jpg');
				so.write('swfplayer');
		</script>	
		</div>
		<h1>Your Local Roofing Contractors</h1>
		<p><?php $company_name; ?> offers complete roof replacements or roof repairs, and offers the best roofing warranty in the business which covers all of our workmanship for 25 years.</p>
		<p>Our extensive knowledge in the roofing industry has earned us the title as Maine roofing authority. We have all the insurances in place to protect you during the roof replacement, and also covers all of the workman while the roofing project is underway.</p>
				
		<p>We are the roofing company that you can trust for a quality roof installation, and security knowing that you hired the best to protect your largest investment.</p>

		<p>You can also schedule your appointment today by filling out or Free No-Obligation Estimate form, and one of our friendly office staff will contact you ASAP!</p>
		<p><br>Read more <a href = "">New Roof Information</a>.</p>
				
		<?php include "inc/free-estimate-link.php" ?>
	</div>
	

	<div id = "bot_foot"></div>

<?php include 'inc/footer.php'; ?>
</body>
</html>