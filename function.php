<?php
function printHeader(string $cursor){
?>
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-CA">
	<head>
		<?php switch($cursor){
		case "Home":
			?><title>The Hackery</title><?php
			break;
		case "Sales":
			?><title>The Hackery :: Equipment Sales</title><?php
			break;
		case "Repair":
			?><title>The Hackery :: Repairs</title><?php
			break;
		case "Recycling":
			?><title>The Hackery :: Recycling</title><?php
			break;
		case "Contact":
			?><title>The Hackery :: Contact Us</title><?php
			break;
		case "Vancouver":
			?><title>The Hackery :: Vancouver Location</title><?php
			break;
		case "Request":
			?><title>The Hackery :: Request a Pickup</title><?php
		} ?>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="Description" content="The Hackery is the place to go for computer repair in Vancouver since 2008. We service Macs, PCs, laptops, desktops, even LCD monitors. Or pick up one of our used computers and recycle your old one here!" />
		<meta name="Rating" content="General" />

		<link rel="stylesheet" type="text/css" href="styling/reset.css" media="all" />
		<link rel="stylesheet" type="text/css" href="styling/style.css" media="screen" />
		<link rel="icon" type="image/vnd.microsoft.icon" href="styling/favicon.ico" /> <!--standard-->
		<link rel="SHORTCUT ICON" href="styling/favicon.ico" /> <!--for MS IE-->
		<link rel="index" type="text/html" href="index.php" title="The Hackery" />
		<link rel="next" type="text/html" href="#.php" title="Sales at The Hackery" />
		<link rel="prev" type="text/html" href="contact.php" title="Contact The Hackery" />
	</head>
	<body>
		<div id="wrap">
			<div id="header">
				<h1><a href="index.php" title="thehackery.ca Home">The Hackery</a></h1>
				<dl id="menu">
					<dt<?php if($cursor=="Home") { ?> class="selected"<?php } ?>><a href="index.php">Home</a></dt>
					<dt<?php if($cursor=="Sales") { ?> class="selected"<?php } ?>><a href="sales.php">Sales</a></dt>
					<dt<?php if($cursor=="Repair") { ?> class="selected"<?php } ?>><a href="repair.php">Repair</a></dt>
					<dt<?php if($cursor=="Recycling"||$cursor=="Request") { ?> class="selected"<?php } ?>><a href="recycling.php">Recycling</a></dt>
					<dt<?php if($cursor=="Contact"||$cursor=="Vancouver") { ?> class="selected"<?php } ?>><a href="contact.php">Contact</a></dt>
				</dl>
			</div>
<div id="content" class="clear">
<?php
}

function printFooter(){
?>
		<div id="footer">
			<div>
				<ul>
					<li>304 Victoria Drive; Vancouver, BC V5L 4C7</li>
					<li>778-373-8295</li>
					<li>Tues-Sat 11am-6pm</li>
					<td width="16%"><a href="http://facebook.com/TheHackeryVancouver" target="_blank"><img src="images/fbicon_20x20.gif" alt="facebook" width="20" height="20" border="0"></a></td>
					<td width="16%"><a href="http://twitter.com/thehackery" target="_blank"><img src="images/twittericon_20x20.gif" alt="twitter" width="20" height="20" border="0"></a></td>
					</ul>
					<br>
					<p><center>Copyright &#169; 2008-2022 Emma's Hackery Services Inc.</center></p>
			</div>
		</div>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-11607816-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-11607816-1');
</script>
	</body>
</html>
<?php
}
?>
