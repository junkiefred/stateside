<?php
echo '<div id = "bot_nav">';

if ($active_btab == "estimate")
{
	echo '<a href = "free-estimate.php"><img src="'.$base_path.'img/tab/estimate_on.gif" name = "estimate" /></a>';
}
else 
{
	echo '<a href = "free-estimate.php"><img src="'.$base_path.'img/tab/estimate_of.gif" onmouseover = "tab5n()" onmouseout = "tab5f()" name = "estimate" /></a>';
}

if ($active_btab == "roofing")
{
		echo '<a href = "roofing.php"><img src="'.$base_path.'img/tab/roofing_on.gif" name = "roofing" /></a>';
}
else 
{
		echo '<a href = "roofing.php"><img src="'.$base_path.'img/tab/roofing_of.gif" onmouseover = "tab6n()" onmouseout = "tab6f()" name = "roofing" /></a>';
}

if ($active_btab == "siding")
{
		echo '<a href = "siding.php"><img src="'.$base_path.'img/tab/siding_on.gif" name = "siding" /></a>';
}
else 
{
		echo '<a href = "siding.php"><img src="'.$base_path.'img/tab/siding_of.gif" onmouseover = "tab7n()" onmouseout = "tab7f()" name = "siding" /></a>';
}

if ($active_btab == "windows")
{
		echo '<a href = "windows.php"><img src="'.$base_path.'img/tab/windows_on.gif" name = "windows" /></a>';
}
else 
{
		echo '<a href = "windows.php"><img src="'.$base_path.'img/tab/windows_of.gif" onmouseover = "tab8n()" onmouseout = "tab8f()" name = "windows" /></a>';
}

if ($active_btab == "gutters")
{
		echo '<a href = "gutters.php"><img src="'.$base_path.'img/tab/gutters_on.gif" name = "gutters" /></a>';
}
else 
{
		echo '<a href = "gutters.php"><img src="'.$base_path.'img/tab/gutters_of.gif" onmouseover = "tab9n()" onmouseout = "tab9f()" name = "gutters" /></a>';
}
echo '	</div>';

?>
