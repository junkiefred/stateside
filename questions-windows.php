
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
$selected_tab='windows';
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
				<h2>Frequently Asked  Questions About Replacement Windows</h2>
<div id = "question_nav">
					<a id = "q1" onclick = "question('qstyles');">When I'm ready to buy new windows what should I be looking for?</a>
					<a id = "q2" onclick = "question('qkinds');">What is the best kind of window, and what brands do you carry?</a>
					<a id = "q3" onclick = "question('qreplacing');">How can I tell it's time to replace my old windows?</a>
					<a id = "q4" onclick = "question('qwarranty');">What is the warrantee on your replacement windows?</a>
					<a id = "q5" onclick = "question('qcost');">What is the cost of new replacement windows?</a>
				</div>
				<div id = "question"></div>
				<div id = "question_container">
					<div id = "qstyles">
						<h2>When I'm ready to buy new windows what should I be looking for?</h2>
						<p>When you to decide replace your windows you should always think about quality instead of just the price, <strong>your home has about 30% or more of window space so you want to make sure you have energy-efficient glass with the low E and argon gas.</strong> Fill out the free estimate form here on the website and we will show you all the window options, and the long term energy-savings you will receive.</p>
					</div>
					<div id = "qkinds">
						<h2>What is the best kind of window, and what brands do you carry?</h2>
						<p>We use only the highest quality replacement windows,<strong> and we have great relationships with a local Maine window manufacturer, and others across the country. We also install wooden replacement windows and vinyl replacement windows.</strong> Make sure to fill out the free estimate form here on the website and we will show you all the options for your home.</p>
					</div>
					<div id = "qreplacing">
						<h2>How can I tell it's time to replace my old windows?</h2>
						<p>If your windows are hard open, or if you can feel the cold air blowing through the windows, or if you have single pane glass it's time to replace your old windows. <strong>If your home built in the 60's or 70's chances are they didn't use energy-efficient glass because it was unavailable. We will show you how you can save money year after year. Go ahead and fill out the free estimate form.</strong></p>
					</div>
					<div id = "qwarranty">
						<h2>What is the warrantee on your replacement windows?</h2>
						<p>Our warranty includes anything that goes wrong with your replacement windows, and our workmanship is guaranteed for as long as you own your home. <strong>We have the strongest warranty in the business, and is backed up with our great reputation. Go ahead and fill out the free estimate form here on the website.</strong></p>
					</div>
					<div id = "qcost">
						<h2>What is the cost of new replacement windows?</h2>
						<p>The pricing of our high-end wooden replacement windows are more expensive due to the manufacturing costs, and the most popular is our vinyl replacement windows which are more affordable and both include energy savings that will last a lifetime. <strong>We would be glad to go over all the different options with you, so fill out the free estimate form here on the website or call us at <?php echo $company_phone; ?>.</strong></p>
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