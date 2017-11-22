<?php

error_reporting(E_ALL);
require_once('session.php');
$oSession = new Session();

require_once('genlib.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title>Chris Newey's Site</title>

	<link rel="shortcut icon" href="/agt_web.ico" type="image/x-icon" >
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />



	<!-- Start CSS Includes -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/html5.css" />
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="css/slideshow.css" >
	<link rel="stylesheet" type="text/css" href="css/cssdropdownmenu.css" />
	<link rel="stylesheet" type="text/css" href="css/site.css" />
	<link rel="stylesheet" type="text/css" media="print" href="css/print.css">
	<!-- End CSS Includes -->

	<!-- Start Javascript includes -->
	<script type="text/javascript" src="jscript/jquery-1.7.2-min.js" ></script>
	<script type="text/javascript" src="jscript/jquery.scrollTo-1.4.2-min.js" ></script>
	<script type="text/javascript" src="jscript/jquery.localscroll-1.2.7-min.js" ></script>
	<!-- End Javascript includes -->


</head>
<body>
<div class="mainWrapper">

	<?php
	//include_once('header.php');
	?>

	<h2>Send Email</h2>

	<?php
		echo "<p>";
		echo "<a href='". getServer()  . "' >Home</a>";
		echo "</p>\n";
	?>

	<div class="mainWrapper">
	<?php
	include_once('mailform.php');
	?>
	</div>

	<?php
		/*************
		echo "<p>";
		echo "<a href='". getServer()   . "' >Home</a>";
		echo "</p>\n";
		*******************/
	?>

	<?php
	include_once('footer.php');
	?>


</div>  <!-- end div mainWrapper -->
</body>
</html>



