
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include "inc/html_head.php"; ?>


<body>

<div id = "page">
<?php include "inc/header.php"; ?>

	<!-- main nav_bar -->
<?php 
$active_tab='testimonials';
include "inc/top-tabs.php"; 
?>
	<!-- secondary nav_bar -->
	<div id = "top_subnavx">							
	</div>

	<!-- main page content -->
	<div id = "top_content">
		<script type="text/javascript">
			start_SlideFrame(1, 8, 20000);
			function start_SlideFrame(start_frame, end_frame, delay) {
						setTimeout(switch_slides(start_frame,start_frame,end_frame, delay), delay);
					}
			function switch_slides(frame, start_frame, end_frame, delay) {
					return (function() {
							Effect.Fade('SlideFrame' + frame);
							if (frame == end_frame) { frame = start_frame; } else { frame = frame + 1; }
							setTimeout("Effect.Appear('SlideFrame" + frame + "');", 950);
							setTimeout(switch_slides(frame, start_frame, end_frame, delay), delay + 850);
						})
					}
		</script>
		<h2>Customer Testimonials</h2><hr/>
		<div id="SlideFrame1" class="slide">
					<img class="stdl"  src="img/testimonials/test1.jpg" alt="Dave Deschaine Testimonials 1" style = "margin-top:0;" />
					<p>"Dear Dave, <strong>Your company installed new siding to our home, and I cannot believe house nice the new vinyl siding looks.</strong> We live in  Scarborough Maine and all these homes were built around 1970, and they all need new vinyl siding so <b>I'm sure you will be getting more calls from the neighborhood</b> - Thanks again for the great job and the guys doing the work really did a professional job -<strong> Highly Recommend David Deschaine if you are looking for Vinyl Siding In Maine.</strong>"</p>
					<h3>Sally &amp; Ken Truesdale - Scarborough, Maine</h3>
		</div>
		<div id="SlideFrame2" class="slide" style="display:none">
					<img class="stdl"  src="img/testimonials/test2.jpg" alt="Dave Deschaine Testimonials 2" style = "margin-top:0;" />
					<p>"We recently had new vinyl siding, entry doors, replacement windows, new storm doors and seamless gutters put on our home in South Portland. <b>We have never had anything like this done before, and Dave Deschaine came to our home on Saturday and showed us everything.</b> We picked everything out and we proceeded with the project, and we are so pleased we went with David Deschaine Roofing and Siding. <b>Amazing Job! - I would highly recommend David Deschaine to anyone. " Thanks Dave!</b></p>
					<h3>Debra Hartford - South Portland, Maine</h3>
		</div>
		<div id="SlideFrame3" class="slide" style="display: none">
					<img class="stdl"  src="img/testimonials/test3.jpg" alt="Dave Deschaine Testimonials 3" style = "margin-top:0;" />
					<p><b>"Dear Dave, I just wanted to Thank You for the great job you did on our home, and I have never seen guys work that hard. </b>I hope you are paying them enough, but really the roof was completed in just one day, and then two days later the siding crew showed up. Jim bent all the white metal on that bender and wrapped all the windows before the new siding was put on all I can say is <b>WOW!</b> - I'm another happy Dave Deschaine Customer!<b> I would definitely refer you guys anyone looking for a new roof or vinyl siding on their home."</b></p>
					<h3>Mary Legere - South Portland, Maine</h3>
		</div>
		<div id="SlideFrame4" class="slide" style="display: none">
					<img class="stdl"  src="img/testimonials/test4.jpg" alt="Dave Deschaine Testimonials 4" style = "margin-top:0;" />
					<p><b>"Hey Dave, We watched you television show last weekend,</b> and we were so impressed we called on Monday. Yes you did personally show up and helped us choose a new roof and CertainTeed vinyl siding that we really liked.<b> What I liked was - We never felt pressured Dave - We looked everything over and called you back!</b> Me and Bobbie are very pleased with both the roof and the siding job and your workers were polite, and stopped to answer all our questions! <b>Job Well Done.</b>" </p>
					<h3>Ed &amp; Bobbie Nagle - Scarborough, Maine</h3>
		</div>
		<div id="SlideFrame5" class="slide" style="display: none">
					<img class="stdl"  src="img/testimonials/test5.jpg" alt="Dave Deschaine Testimonials 5" style = "margin-top:0;" />
					<p>"Dear Dave, We have a large home and your crew came over and setup all the staging and exactly 8 days later our siding job was completed. <b>I was so impressed I told everyone at work, and I know you did get another siding job.</b> Of course you can use my name on your reference sheet or your website Dave! You have a great reputation and <b> we were worried your prices might be to high but your price was very competitive to all of our other bids, But we liked you Dave "You're Funny".</b> Thanks for keeping the yard clean, and I was worried about my dogs."</p>
					<h3>Theresa Joy - Portland, Maine</h3>
		</div>
		<div id="SlideFrame6" class="slide" style="display: none">
					<img class="stdl"  src="img/testimonials/test6.jpg" alt="Dave Deschaine Testimonials 6" style = "margin-top:0;" />
					<p>"We hired Dave Deschaine to install our new roof, and <b>I was nervous but Dave Deschaine does have a good reputation with the Better Business Bureau.</b> But once Dave Deschaine and his roofers showed up All my Fears Were GONE! <b> Me and my husband watch from start to finish - Very Impressive!</b> They showed up at 8:15 a.m. and took off the roof and put a architectural roof back on our home by 4:25 p.m. that same day! - Thanks David Deschaine Roofers - Great Work!"</p>
					<h3>Arthur &amp; Rita Croker - Saco, Maine</h3>
		</div>
		<div id="SlideFrame7" class="slide" style="display: none">
					<img class="stdl"  src="img/testimonials/test7.jpg" alt="Dave Deschaine Testimonials 7" style = "margin-top:0;" />
					<p><b>"Mr. Deschaine, I have been looking to get our siding replaced for two years, and have received many estimates.</b> Our home has 2x4 construction and we wanted insulation added to the walls first. You offered the insulation board over all the walls first, and then installed the new vinyl siding just like I wanted. <b> I laughed when you said "After Getting All Those Quotes I Can't Teach You Anything, So Today I'm Just Going To Take You Out Of The Market!" </b> Me and my wife could Not believe you said that you are a great contractor, and we are very happy and I would recommend to my best friends - Thanks Dave Great working with you!"</p>
					<h3>John &amp; Jean Davidson - Portland, Maine</h3>
		</div>
		<div id="SlideFrame8" class="slide" style="display: none">
					<img class="stdl"  src="img/testimonials/test8.jpg" alt="Dave Deschaine Testimonials 8" style = "margin-top:0;" />
					<p>"Dear David, I would like tell anyone who is looking for a <b>new roof to STOP here and go with your company! - I don't give out testimonials very often - But your company  deserves one.</b> You treated me with respect and I felt very comfortable working with you and your company. You did the roof FAST and I would recommend you and your roofing company very highly, Thanks again."</p>
					<h3>Dorothy Spears - Saco, Maine</h3>
		</div>
	
	
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