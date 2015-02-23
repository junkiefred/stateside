
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
$selected_tab='gutters';
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
					<a id = "q1" onclick = "question('qaluminum');">What are the best aluminum seamless gutters?</a>
					<a id = "q2" onclick = "question('qcolors');">Can you match the color of my trim, and what colors do you have?</a>
					<a id = "q3" onclick = "question('qdamage');">Is your seamless gutter strong enough to hold up with snow and ice?</a>
					<a id = "q4" onclick = "question('qcover');">Do you have gutter covers so I don't have to clean my gutters?</a>
					<a id = "q5" onclick = "question('qwarranty');">What is your warrantee on seamless gutters and what is included?</a>
				</div>
				<div id = "question"></div>
				<div id = "question_container">
					<div id = "qaluminum">
						<h2>What are the best aluminum seamless gutters?</h2>
						<p>The best type of gutter is one that is seamless, and our gutters are installed with silicone sealant on the back of the gutter, and the gutter hangers are installed every 12" inches on center which is exclusive in the industry. <strong>We have been installing gutters for over 35 years and these gutters are the best- Call Us Today! <?php echo $company_phone; ?></strong></p>
					</div>
					<div id = "qcolors">
						<h2>Can you match the color of my trim, and what colors do you have?</h2>
						<p>We have the ability to match any trim color with our seamless gutters, and downspouts and we also wrap all the trim soffit and fascia if needed. <strong>Our exclusive gutter installer also can wrap the fascia behind the gutter so you never have to worry about wood rot, or ever painting your trim again. Fill out the Free Estimate Form here on the website or Call us at: <?php echo $company_phone; ?></strong></p>
					</div>
					<div id = "qdamage">
						<h2>Is your seamless gutter strong enough to hold up during the winter with snow and ice?</h2>
						<p>Our seamless gutters have the best gutter hanger in the business and are installed every 12 inches on center, will hold the heavy wet snow guaranteed. Our exclusive  seamless gutter installer has been installing gutters for years, <strong>and our experience allows us to see ahead if there may be an issue. Fill out the free estimate form here on the website or call us today at <?php echo $company_phone; ?></strong></p>
					</div>
					<div id = "qcover">
						<h2>Do you have gutter covers so I don't have to clean my gutters?</h2>
						<p>Yes we do have a couple of different brands that we use that work with our seamless gutters, and this keeps out all the leaves see another have to clean your gutters again. <strong>We have the best gutter screening in the business so you don't have to worry about climbing up on a ladder to clean your gutters year after year. Fill out the free estimate form here on the website.</strong></p>
					</div>
					<div id = "qwarranty">
						<h2>What is your warrantee on seamless gutters and what is included?</h2>
						<p>Our seamless aluminum gutters are made of the highest quality materials, and we guarantee everything for as long as they are on your home. <strong>And our exclusive gutter installer will come back after the first year for an annual inspection, and  make sure everything is perfect. Fill out the free estimate form here in the website or give us a call at <?php echo $company_phone; ?></strong></p>
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