<?php if (	$frm_submit =='1' && !$errormsg )
{
	echo "<font color=red><h2>Thank you for requesting a free home estimate.</h2><br>One of our roofing professionals will contact you to confirm a good time and date for your estimate.<br /><br />We appreciate you giving us the opportunity to earn your business!</font>";
}
else
{ ?>
		<h1>Free Estimate Form</h1>
		<p>Schedule your appointment with our online estimate form below. Someone will contact you to confirm the time and date to meet with one of our roofing professionals.</p>

		<?php if ($errormsg) {	echo "<b><i><font color=red>".$errormsg."</font></i><b>";}?>

		<form action="<?php echo $base_path; ?>free-estimate.php" method="post" name = "estimate">
		<input type = "hidden" name = "postcheck" value = "1" />
		
		<h3>Your Project Information</h3>
	
		<i>Fields marked with an * are required</i><br>	
    	Full Name:<br />
		*First<input type = "text" name = "fname" maxlength="100" style = "width:120px;" value = "" />&nbsp;
		*Last: <input type = "text" name = "lname" maxlength="100" style = "width:120px;vertical-align:middle;" value = "" /><br/>
		Email Address:<br/><input type = "text" name = "email" maxlength="100" value = "" /><br/>
		*Phone Number:<br/><input type = "text" name = "phone" maxlength="100" value = "" /><br/>
		The best time to call is...<br/>
			<select name = "call">
				<option>...</option>
				<option>in the morning</option>
				<option>in the afternoon</option>
				<option>in the evening</option>
				<option>on the weekend</option>
			</select><br/>
		
        Street Address:<br/><input type = "text" name = "street" maxlength="255" value = "" /><br/>
		City:<br/><input type = "text" name = "city" maxlength="100" value = "" /><br/>
		State:<br/><select name="state"> 
					<option>"...</option>
                    <option>Alabama</option>
                    <option>Alaska</option>
                    <option>Arizona</option>
                    <option>Arkansas</option>
                    <option>California</option>
                    <option>Colorado</option>
                    <option>Connecticut</option>
                    <option>Delaware</option>
                    <option>Florida</option>
                    <option>Georgia</option>
                    <option>Hawaii</option>
                    <option>Idaho</option>
                    <option>Illinois</option>
                    <option>Indiana</option>
                    <option>Iowa</option>
                    <option>Kansas</option>
                    <option>Kentucky</option>
                    <option>Louisiana</option>
                    <option >Maine</option>
                    <option>Maryland</option>
                    <option>Massachusetts</option>
                    <option>Michigan</option>
                    <option>Minnesota</option>
                    <option>Mississippi</option>
                    <option>Missouri</option>
                    <option>Montana</option>
                    <option>Nebraska</option>
                    <option>Nevada</option>
                    <option>New Hampshire</option>
                    <option>New Jersey</option>
                    <option>New Mexico</option>
                    <option>New York</option>
                    <option>North Carolina</option>
                    <option>North Dakota</option>
                    <option>Ohio</option>
                    <option>Oklahoma</option>
                    <option>Oregon</option>
                    <option selected>Pennsylvania</option>
                    <option>Rhode Island</option>
                    <option>South Carolina</option>
                    <option>South Dakota</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Utah</option>
                    <option>Vermont</option>
                    <option>Virginia</option>
                    <option>Washington</option>
                    <option>Washington DC</option>
                    <option>West Virginia</option>
                    <option>Wisconsin</option>
                    <option>Wyoming</option>
                    <option>Other</option> 
                </select><br/>
		Zip Code:<br/><input type = "text" name = "zip" maxlength="12" value = "" /><br/>
        
        
        
		<!--h3>Your Appointment Information</h3>
		<br/>When is the best time to contact you<br/><input type = "text" disabled name = "meet" id = "meet" value = "" /><br/>
		<input type = "hidden" name = "appointment" id = "appointment" value = "" />
		<br/-->

		<b style = "font-size:14px;">Please check the products you are interested in:</b><br/>
		<p style = "font-size:12px;">
		<input name = "project_roof" type = "checkbox" value = "Complete Roofing Installation,"  /> Roofing Installation<br/>
		<input name = "project_siding" type = "checkbox" value = "Complete Vinyl Siding Installation,"  /> Vinyl Siding Installation<br/>
		<input name = "project_gutter" type = "checkbox" value = "Complete Gutter Installation,"  /> Gutter Installation<br/>
		<input name = "project_window" type = "checkbox" value = "Complete Window Installation,"  /> Window Installation<br/>
		<input name = "project_service" type = "checkbox" value = "Service / Repair"  /> Service or Repair Work<br/>
		</p><br/>

		I would like to start this project...<br/>
		<select name = "start">
			<option>...</option>
			<option>as soon as possible</option>
			<option>within 2 weeks</option>
			<option>within 1 month</option>
			<option>within 2 months</option>
			<option>within 3 months</option>
			<option>unsure</option>
		</select><br/>
       
		How will you finance the project?<br/>
		<select name = "finance">
			<option>...</option>
			<option>I will need financing</option>
			<option>I have an equity line available</option>
			<option>I have cash available</option>
			<option>I have a credit card available</option>
			<option>I am unsure</option>
		</select><br/>

		Please enter any additional project information below:<br/>
		<textarea name = "information" maxlength="500"></textarea><br/>
		
		<h3>Additional Information</h3>
		What style home do you have?<br/>
		<select name = "style">
			<option>...</option>
			<option>Cape</option>
			<option>Colonial</option>
			<option>Ranch</option>
			<option>Split Level</option>
			<option>Victorian</option>
			<option>Bungalow</option>
		</select><br/>
		How old is your house?<br/>
		<select name = "old">
			<option>...</option>
			<option>Less than 10 years old</option>
			<option>11-20 years old</option>
			<option>21-30 years old</option>
			<option>31-40 years old</option>
			<option>41-50 years old</option>
			<option>More than 50 years old</option>
		</select><br/>
		How long have you lived in your house?<br/>
		<select name = "lived">
			<option>...</option>
			<option>Less than 3 years</option>
			<option>3-8 years</option>
			<option>9-15 years</option>
			<option>16-20 years</option>
			<option>More than 20 years</option>
		</select><br/>
		What is your age?<br/>
		<select name = "age">
			<option>...</option>
			<option>18-35 years</option>
			<option>36-45 years</option>
			<option>46-55 years</option>
			<option>56-65 years</option>
			<option>66+ years</option>
		</select><br/>
		How did you find our website?<br/>
		<select name = "website">
			<option>...</option>
			<option>Search Engine Results</option>
			<option>Television</option>
			<option>Radio</option>
			<option>Recommended by family/friend</option>
			<option>Job Site Signs</option>
			<option>Direct Mail</option>
			<option>Newspaper</option>
			<option>Door Hangers</option>
			<option>Trade Show / Event</option>
		</select><br/>
		Please enter any additional question or information below:<br/>
        
        
		<textarea name = "comments" maxlength="500" ></textarea><br/>

		<br/><br/>
		<input type = "submit" name="submit" value = "Submit Request" /><br/>
		</form>
<?php } ?>