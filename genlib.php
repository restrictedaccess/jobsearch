<?php
/*************************

genlib.php


Date		Programmer			Description
17/09/2012	CDN				Created

****************************/

require_once('LoremIpsum.class.php');

function printLorum()
{

	$oLorum  = new LoremIpsumGenerator();

	print($oLorum->getContent(100, 'plain'));
}

function getUrl()
{
	return 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'];
}

// Returns the name of the server
function getServer()
{
	return 'http://' . $_SERVER['SERVER_NAME'];
}


/**************
 Displays the passed string using the CSS class "error"
 ******************************************************/
function dispError($str,$noPara = False) {
	if ($noPara) {
		print("<div class=\"error\">$str</div>\n");
	}
	else {
		print("<p><div class=\"error\">$str</div></p>\n");
	}
}

function dispWarn($str, $noPara= False) {
	if ($noPara) {
		print("<span class=\"error\">$str</span>\n");
	}
	else {
		print("<p><span class=\"error\">$str</span></p>\n");
	}
}



?>