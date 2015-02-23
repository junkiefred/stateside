
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
$selected_tab='roofing';
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
				<h2>Frequently Asked Roofing Questions</h2>
				<div id = "question_nav">
					<a id = "q1" onclick = "question('qstyles','q1');">What type of roofing products do you offer?</a>
					<a id = "q2" onclick = "question('qlength','q2');">What is the life expectancy of the roof?</a>
					<a id = "q3" onclick = "question('qwarranty','q3');">What is the length of your roofing warranty and what is included?</a>
					<a id = "q4" onclick = "question('qsamples','q4');">Will you bring asphalt and metal roofing samples during the estimate?</a>
					<a id = "q5" onclick = "question('qcost','q5');">What is the cost of a new roof?</a>
				</div>
				<div id = "question"></div>
				<div id = "question_container">
					<div id = "qstyles">
						<h2>What type of roofing products do you offer?</h2>
						<p>We offer GAF asphalt roofing shingles, and modified torch-down rubber roofing material, we also offer Tamko building products such as asphalt shingles and modified torch-down rubber. We install ice and water shield on all of our roofing projects, and we also add ridge ventilation systems. Fill out free estimate form here on the website or call us at <strong><?php echo $company_phone; ?></strong> Please go to <a href="http://www.gaf.com" target="_blank">GAF.com</a> and <a href="http://www.tamko.com" target="_blank">Tamko.com</a> for color selections.</p>
					</div>
					<div id = "qlength">
						<h2>What is the life expectancy of the roof?</h2>
						<p>All of our roofing products carry the strongest warranty in the business, and most of our roofing products are guaranteed for a lifetime. We have asphalt roofing shingles. We will go over all the options with you, and help you with your roofing product selection. <strong>Fill out the free estimate form here on the website or give us a call at <?php echo $company_phone; ?></strong></p>
					</div>
					<div id = "qwarranty">
						<h2>What is the length of your roofing warranty and what is included - Both Materials &amp; Labor?</h2>
						<p>we are a GAF & Tamko company which allows us to give you a lifetime roofing warranty. This warranty covers materials, labor which is backed up by the manufacturer. So if anything ever goes wrong with your roof it's covered, and it is a registered warrantee with GAF or Tamko. <strong>Fill out the free estimate form here on the website.</strong></p>
					</div>
					<div id = "qsamples">
						<h2>Will you bring asphalt and metal roofing samples during the estimate?</h2>
						<p>We will bring over large samples of roofing material so you can see the different options, we have a Information package with brochures, literature so you can see what's available. Then you can read about all the warrantee of our roofing products.<strong> Fill out the free estimate form here on the website or call us at <?php echo $company_phone; ?></strong></p>
					</div>
					<div id = "qcost">
						<h2><a id = "q7" onclick = "question('qcost','q5');">What is the cost of a new roof in Maine?</a></h2>
						<p>Roofing prices may vary and you will find that the cost of the new roof will be a large investment, and we buy a large volume of roofing materials each year, and we get great prices. So we pass along our savings to you the homeowner and give you the best price possible, so <strong>fill out the free estimate form here on the website or give us a call at <?php echo $company_phone; ?></strong></p>
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