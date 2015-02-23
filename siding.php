
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
$active_btab = "siding";
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
					so.addVariable('file','http://www.theroofjob.com/vid/sidingnew.flv&image=http://www.theroofjob.com/img/davemov.jpg');
					so.write('swfplayer');
					</script>	
				</div>
				<h3>Vinyl Siding That Offers The Best Prices Available</h3>
				<p><?php $company_name; ?>  has installed hundreds of vinyl siding installations over the past 25 years, <strong>and we would like to offer our professional siding services to you. </strong></p>
				<p>Our vinyl siding crews are fully insured and extremely experienced with trim coverage around the windows, doors, Soffit and fascia which eliminates the need for painting. We buy a large volume of vinyl siding from our local distributor, <strong>and we get great prices on our vinyl siding and we pass those savings on to you.</strong></p>
				<p>During our initial appointment we will go over everything<strong> and give your home an exterior visual inspection to uncover any potential issues,</strong> and then offer solutions which will be included in our vinyl siding estimate.</p>
				<p>You can also schedule your appointment today by filling out or Free   No-Obligation Estimate form, and one of our friendly office staff will   contact you ASAP!</p>
				<br><br><br><p>Read more about <a href = "">Vinyl Siding Products</a>.</p>
		<?php include "inc/free-estimate-link.php" ?>
			

	</div>
	

	<div id = "bot_foot"></div>

<?php include 'inc/footer.php'; ?></body>
</html>