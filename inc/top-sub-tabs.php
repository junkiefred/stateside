<?php
echo	'<div id = "top_subnav">							';


if ($selected_tab=='roofing')
{
		echo '<a href = "'.$top_tab.'-roofing.php" class = "selected">Roofing '.$top_tab.'</a>';
}
else
{
		echo '<a href = "'.$top_tab.'-roofing.php">Roofing '.$top_tab.'</a>';
}

if ($selected_tab=='siding')
{
		echo '<a href = "'.$top_tab.'-siding.php" class = "selected">Siding '.$top_tab.'</a>';
}
else
{
		echo '<a href = "'.$top_tab.'-siding.php">Siding '.$top_tab.'</a>';
}

if ($selected_tab=='windows')
{
		echo '<a href = "'.$top_tab.'-windows.php" class = "selected">Windows '.$top_tab.'</a>';
}
else
{
		echo '<a href = "'.$top_tab.'-windows.php">Windows '.$top_tab.'</a>';
}

if ($selected_tab=='gutters')
{
		echo '<a href = "'.$top_tab.'-gutters.php" class = "selected">Gutters '.$top_tab.'</a>';
}
else
{
		echo '<a href = "'.$top_tab.'-gutters.php">Gutters '.$top_tab.'</a>';
}

echo	'</div>';
?>


