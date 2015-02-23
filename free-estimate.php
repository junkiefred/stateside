
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include "inc/html_head.php"; ?>

<!-- process the form -->
<?php 
$frm_submit = '0';

if ($_POST['submit']) 
	{
	/* set necessary values */
	$frm_submit = '1';
	$recipient = "emailaddress@here.com"; /* Danny's email address */
	$subject = "Request for a free estimate from website";
	$mailheader = "From: $email \r\n";  /* websites email address (or maybe customer email address)*/
	$errormsg = "";

	/* collect data from form */
	$frm_fname = $_POST['fname'];
	$frm_lname = $_POST['lname'];
	$frm_email = $_POST['email'];
	$frm_phone = $_POST['phone'];
	$frm_call = $_POST['call'];
	$frm_street = $_POST['street'];
	$frm_city = $_POST['city'];
	$frm_state = $_POST['state'];
	$frm_zip = $_POST['zip'];
	$frm_project_roof = $_POST['project_roof'];
	$frm_project_siding = $_POST['project_siding'];
	$frm_project_window = $_POST['project_window'];
	$frm_project_gutter = $_POST['project_gutter'];
	$frm_project_service = $_POST['project_service'];
	$frm_start = $_POST['start'];
	$frm_finance = $_POST['finance'];
	$frm_information = $_POST['information'];
	$frm_call = $_POST['style'];
	$frm_call = $_POST['old'];
	$frm_call = $_POST['age'];
	$frm_call = $_POST['lived'];
	$frm_call = $_POST['website'];
	$frm_call = $_POST['comments'];

	/* validate data */
	if (strlen($frm_fname) < 3)
		{
		$errormsg = "Name is not valid<br>";
		}
	/* need code to validate email */
	/* need code to validate phone number */

	$message = /* build message from form fields */  "Message goes here ";
	//mail($recipient, $subject, $message, $mailheader) or die("Error!");

	}
?>
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