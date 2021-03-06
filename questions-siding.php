
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include "inc/html_head.php"; ?>


<body>

<div id = "page">
<?php include "inc/header.php"; ?>

	<!-- main nav_bar -->
<?php 
$active_tab='questions';
include "inc/top-tabs.php"; 
?>

	<!-- secondary nav_bar -->
<?php 
$selected_tab='siding';
$top_tab='questions';
include "inc/top-sub-tabs.php"; 
?>

	<!-- main page content -->
	<div id = "top_content">
<script type="text/javascript">
				function question(name,que){
					document.getElementById('question').innerHTML = document.getElementById(name).innerHTML;
					var i=1;
					var qeu=0;
					document.getElementById(que).style.backgroundColor = '#abcdef';
					document.getElementById(que).style.textDecoration = 'none';
					document.getElementById(que).style.color = '#111';
					while (i<=6){
						if (que != "q"+i) {document.getElementById("q"+i).style.backgroundColor = '';
						document.getElementById("q"+i).style.textDecoration = 'underline';
						document.getElementById("q"+i).style.color = '#1D77B8';}
						i++;
						}
					}
				</script>
				<h2>Frequently Asked Siding Questions</h2>
				<div id = "question_nav">
					<a id = "q1" onclick = "question('qcolor');">What types of vinyl siding do you offer clap board and vinyl shingles?</a>
					<a id = "q2" onclick = "question('qsamples');">How do I get samples of your vinyl siding products?</a>
					<a id = "q3" onclick = "question('qsiding');">Why should I have David Deschaine do my vinyl siding?</a>
					<a id = "q4" onclick = "question('qwarranty');">What are the warrantees on your vinyl siding?</a>
					<a id = "q5" onclick = "question('qcost');">What will it cost for new vinyl siding?</a>
				</div>
				<div id = "question"></div>
				<div id = "question_container">
					<div id = "qcolor">
						<h2>What types of vinyl siding do you offer?</h2>
						<p>We have many different brands and styles of vinyl siding including vinyl shingles and clap boards siding , <strong>We use GAF and Tamko because they have many different options that can add curb appeal to any home with our accessories and moldings for doors and windows.</strong></p>
					</div>
					<div id = "qsamples">
						<h2>How do I get samples of your vinyl siding products?</h2>
						<p>If you would like to get some samples of our vinyl siding, <strong>all you have to do is schedule appointment here on the website or you can call us at: <?php echo $company_phone; ?></strong> and we can come over inspect the property and give you the price for new vinyl siding, complete trim coverage so you never have to paint again, <strong>and your home will increase in value with quality siding products.</strong></p>
					</div>
					<div id = "qsiding">
						<h2>Why should I have David Deschaine do my vinyl siding?</h2>
						<p>We have some the best vinyl siding installers in the area and provide high quality trim coverage, vinyl siding which include soffit and fascia and we can really make your home beautiful. <strong>Go ahead and fill out the free estimate form here on the website so you can schedule your free estimate, and we will be glad to answer all of your questions.</strong></p>
					</div>
					<div id = "qwarranty">
						<h2>What are the warrantees on your vinyl siding?</h2>
						<p>The warranty on our vinyl siding is lifetime non-prorated is in fact one of the best warranties in the industry, <strong>and if you ever have a problem your vinyl siding it's covered 100% material and labor for as long as you own your home. </strong>Fill out the free estimate form here on our website or you can call us at <?php echo $company_phone; ?> We look forward to working with you.</p>
					</div>
					<div id = "qcost">
						<h2>What will it cost for new vinyl siding?</h2>
						<p>The best way of finding out how much it is going cost for new vinyl siding on your home, is to have us visit your property and we will do a complete inspection of the exterior of your home, and then we'll put together a package which includes trim coverage, designer accessories and any other features you may want so we can give you the best price possible. <b>Simply fill out the free estimate form here on the website or you can call us anytime at <?php echo $company_phone; ?></b></p>
					</div>
				</div>	<?php include "inc/free-estimate-link.php" ?>
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