
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include "inc/html_head.php"; ?>


<body>

<div id = "page">
<?php include "inc/header.php"; ?>

	<!-- main nav_bar -->
<?php 
$active_tab='about';
include "inc/top-tabs.php"; 
?>
	<!-- secondary nav_bar -->
	<div id = "top_subnavx">							
	</div>

	<!-- main page content -->
	<div id = "top_content">
		<h2>About Stateside Exteriors</h2>
				<p><strong>Company Mission Statement:</strong>  "Giving home owners what they want, expert installation services at reasonable prices"</p>
				<p>Our reputation means everything, and we will do what ever it takes to make our customers happy. Your customer satisfaction is what keeps us in business, our roofing experts are some of the best installers in the state. Danny Martino has installed thousands of new roofs in the Deleware Valley, and also has completed thousands of vinyl siding jobs. We also install seamless gutter, replacement windows and <strong>everything is installed by our professional installation crews that live right here in the Delware Valley.</strong></p> 
				<p>Danny Martino & has over 35 years experience in the home improvement business and  has always offered to our customers high quality products with expert roofing and vinyl siding installations. We have the best installers who have years of installation knowledge and experience and it shows on the jobs.<strong>"Our workmanship is some of the highest quality anywhere."</strong></p>
                <p>Danny Martino and John Lawler have completed thousands of roofing installations in the Pennsylvania, New Jersey and the Deleware Valley.  We are your local Roofing Contractors.</p>
                <p><strong>I look forward to working with you,</strong></p><br>	<img class="signature" alt="David J. Deschaine Signature" src="img/signature.png" />
	
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