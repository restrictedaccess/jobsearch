<?php

// Report all PHP errors (see changelog)
error_reporting(E_ALL);
require_once('session.php');
$oSession = new Session();

require_once('genlib.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title>HTML 5 Template</title>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Start CSS Includes -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/html5.css" />
	<link rel="stylesheet" type="text/css" href="css/site.css" />
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="css/slideshow.css" >
	<link rel="stylesheet" type="text/css" href="css/tooltip.css" >
	<link rel="stylesheet" type="text/css" href="css/cssdropdownmenu.css" />
	<!-- End CSS Includes -->

	<!-- Start Javascript includes -->
	<script type="text/javascript" src="jscript/jquery-1.7.2-min.js" ></script>
	<script type="text/javascript" src="jscript/jquery.scrollTo-1.4.2-min.js" ></script>
	<script type="text/javascript" src="jscript/jquery.localscroll-1.2.7-min.js" ></script>
	<!-- End Javascript includes -->


</head>
<body>



	<header>
		<h1>HTML 5 Template</h1>
	</header>


	<nav>

		<ul id="nav">

			<li>
				<a href="phpinfo.php">PHP Info</a>
			</li>


			<li>
				<a href="template.php">HTML 5 Template</a>
			</li>


			<li>
				<a href="#" >Item 1</a>

				<ul>
					<li><a href="#">Small product (one)</a></li>
					<li><a href="#">Small product (two)</a></li>
					<li><a href="#">Small product (three)</a></li>
				</ul>

			</li>

		</ul>
	</nav>

	<footer>
		<p>

			<a href="http://validator.w3.org/check?uri=<?php print(getUrl()); ?>">
				<img class="validmarkup"
					src="images/validhtml5.jpg"
					alt="Valid HTML5" />
			</a>

			<a href="http://jigsaw.w3.org/css-validator/check/referer">
				<img class="validmarkup"
					src="images/validcss3.gif"
					alt="Valid CSS" />
			</a>


		</p>

	</footer>


</body>
</html>
