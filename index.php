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
	include_once('header.php');
	?>

	<h2>
		Email 
		<a href="sendemail.php">Chris Newey (newey499@hotmail.com)</a>
	</h2>


	<?php
	include_once('navigation.php');
	?>


	<article>

		<h2>Personal Statement</h2>

		<p>
		An I.T. professional with over 25 years of experience in commercial software development,
		15 of which have been as a contract analyst/programmer.
		</p>
		
		<p>
		Experience ranges from systems level programming through applications development, with
	  particular experience of warehousing and logistics applications. 
		</p>
		
		<p>
		A broad knowledge of networking and data systems. A record of fulfilling responsibilities in a
		professional and efficient manner, self motivated with proven experience of working within and
		supervising teams.
		</p>
		
		<p>
		Articulate and educated to degree level, looking for a role that will utilise the skills which 
		have been built up to their potential.		
		</p>

	</article>

	<article>

		<h2>Key Skills</h2>

		<p>
		<table>

		<tr>
			<th colspan="2" >
			Industry Experience
			</th>
		</tr>

		<tr>
			<td>
				Applications Programming
				<br />
				Business Analysis
				<br />
				Logistics
				<br />
				Manufacturing
				<br />
				Motor Insurance
			</td>

			<td>
				Parcel Tracking
				<br />
				Project Management
				<br />
				Systems Analysis
				<br />
				Systems Programming
				<br />
				Warehousing
			</td>
		</tr>

		<!-- ======================================= -->

		<tr>
			<th  colspan="2" >
			Technical Expertise
			</th>
		</tr>


		<tr>
			<td>
			Android Development
			<br />
			Apache Web Server Configuration (Linux & Windows)
			<br />
			C, C++ QT and Boost Libraries
			<br />
			C#
			<br />
			DB2 + PL1 + Embedded SQL
			<br />
			Delphi
			<br />
			Legacy Languages - Dbase, Clipper, Foxpro, Quick Basic
			<br />
			Linux: iptables, Samba, SSH, Shell Scripting
			<br />
			Microsoft Office Customisation, Integration &amp; Automation, VBA

			</td>


			<td>
			MySQL
			<br />
			.NET
			<br />
			PHP
			<br />
			PostgreSQL
			<br />
			Report Writers (Various)
			<br />
			SQL Server
			<br />
			VMWare Virtualisation
			<br />
			Web development: CSS, Google+ API, Facebook API, HTML, XHTML, JSON, Javascript, jQuery, LAMP,
			RSS, Smarty, SOAP, Twitter API,
			<br />
			Windows - various releases

			</td>


		</tr>


		</table>


	</article>

	<article>

		<h2>Examples Of Work</h2>

		<table>

		    <tr>
			<th  colspan="2" >
			Websites
			</th>
		    </tr>

		    <tr>
			<th>
			URL
			</th>
			<th>
			Git Repository
			</th>
		    </tr>


		    <tr>
			<td>
			Church Website
			<br />
			<a href="http://christchurchlye.org.uk">http://christchurchlye.org.uk</a>
			</td>
			<td>
			<a href="https://github.com/newey499/church/commits/master">https://github.com/newey499/church/commits/master</a>
			</td>
		    </tr>


		    <tr>
			<td>
			Church XML and JSON REST Service
			<br />
			<a href="http://rest.christchurchlye.org.uk/">http://rest.christchurchlye.org.uk/</a>
			</td>
			<td>
			See rest-service sub directory
			<br />
			<a href="https://github.com/newey499/church">https://github.com/newey499/church</a>
			</td>
		    </tr>


		    <tr>
			<td>
			<a href="http://test.bellhangers.com/">http://test.bellhangers.com/</a>
			</td>
			<td>
			None
			</td>
		    </tr>



		    <tr>
			<td>
			<a href="http://http://chris-newey.christchurchlye.org.uk">http://http://chris-newey.christchurchlye.org.uk</a>
			&nbsp; &nbsp; (This site)
			</td>
			<td>
			<a href="https://github.com/newey499/jobsearch/commits/master">https://github.com/newey499/jobsearch/commits/master</a>			
			</td>
		    </tr>

		    <tr>
			<th  colspan="2" >
			Open Source Software
			</th>
		    </tr>

		    <tr>
			<td>
			<b>Qiptables</b>
			<br />
			A QT based utility to design and switch Linux Firewall rulesets providing a wrapper
                        for 
			<a href="http://netfilter.org/documentation/">iptables</a>.
			</td>
			<td>
			<a href="https://github.com/newey499/qiptables/commits/master">https://github.com/newey499/qiptables/commits/master</a>
			</td>
		    </tr>

		    <tr>
			<td>
			<b>Enigma</b>
			<br />
			A QT and MySQL based Enigma Cypher machine emulator.
			</td>
			<td>
			<a href="https://github.com/newey499/enigma/commits/master">https://github.com/newey499/enigma/commits/master</a>
			</td>
		    </tr>


		</table>

	</article>

	<article>

		<h2>Employment</h2>

		<p>
		Since becoming unemployed in January 2008 I have kept myself busy studying an Open University
		B.A in History which I have been awarded. I spent 2 months during 2010 with Thomas Dudley Ltd, on a work experience
		placement where I undertook the following tasks:
		</p>

		<p>
			<ul>

			<li>
			Automated production and emailing of Crystal reports using c# and .NET.
			</li>

			<li>
			Interface between Vantage CSM and Magento online shopping application
			using C#, .NET, SOAP, PHP and XML.
			</li>

			<li>
			Bespoke modifications to Magento ecommerce application using PHP and XML.
			</li>

			</ul>
		<p>

		<table>

		<tr>
			<th class="table70" >
			Position
			</th>

			<th>
			Key Responsibilities
			</th>
		</tr>

		<tr>

			<td>
			Job title: Director
			<br />
			Company name: GleamCo Ltd
			<br />
			Location: Stourbridge
			<br />
			Dates of employment: August 1993 – January 2008
			<br />
			Running my own business for 15 years, responsible for keeping accounts and paying taxes as
			per HMRC regulations.
			I delivered contracts on behalf of TNT, Next, Ryder Logistics, NPower (MEB), and Allied
			Breweries.
			</td>

			<td>
			Operation of Limited Company
			<br />
			General software development
			<br />
			Design websites using PHP CSS and MySQL
			<br />
			Apache server configuration
			<br />
			Linux C++ and C
			<br />
			Various open source projects
			</td>

		</tr>

		<tr>

			<td>
			Job title: Network Project Manager
			<br />
			Company name: Misys Financial Systems Ltd
			<br />
			Location: Worcester
			<br />
			Dates of employment: March 1991 – August 1993
			<br />
			One of the largest vendors of banking software and solutions in the world, I was involved
			in the first implementations of EDI Motor Insurance systems implemented in the UK and using
			the global IBM network.
			</td>

			<td>
			Project Management
			<br />
			Design &amp; Development
			<br />
			Leading a team of 4 developers
			</td>

		</tr>

		<tr>

			<td>
			Job title: Senior Analyst
			<br />
			Company name: Norton Waugh Computing Ltd
			<br />
			Location: Wolverhampton
			<br />
			Dates of employment: November 1987 – March 1991
			<br />
			One of the UK's leading information and consultancy providers, areas of expertise include:
			Technical cellar management systems, Estate Management, COSHH application and a
			statistical package for an Agricultural supply company. Also a cheque management system
			for Allied Lyons subsidiaries cashiers office.
			</td>

			<td>
			Project Management
			<br />
			Design &amp; Development
			</td>

		</tr>

		<tr>

			<td>
			Job title: Systems Programmer
			<br />
			Company name: Mysys Financial Systems Ltd.
			<br />
			Location: Worcester
			<br />
			Dates of employment: January 1986 – November 1987
			</td>

			<td>
			Maintenance and Development
			<br />
			TRIPOS Operating System
			<br />
			BCPL, C, 68020 + 68030 Assembler
			<br />
			TRIPOS HP UNIX
			</td>

		</tr>

		</table>


	</article>

	<article>

		<h2>Education</h2>

		<p>
			<ul>

			<li>
				Open University.
			</li>

			<li>
				Wolverhampton Polytechnic.
			</li>

			<li>
				Bilston Community College.
			</li>

			<li>
				Normanton School, Buxton, Derbyshire.
			</li>

			</ul>


	</article>

	<article>

		<h2>Formal Qualifications </h2>

		<p>
			<ul>

			<li>
				B.Sc -  Computer Science 2:1
			</li>

			<li>
				B.A. -  History
			</li>			
			
			<li>
			  A Levels: Pure Maths, Applied Maths, Physics, English Language.
			</li>

			<li>
				O Levels: English Language, English Literature, Maths, Physics, Chemistry, Biology,
				Human Biology.
			</li>

			</ul>


	</article>

	<article>

		<h2>Personal Interests</h2>

		<p>
		During the winter months I play Hockey as a Goalkeeper for a Midland League side.
		<br />
		I enjoy reading political and military history and playing Chess.
		<br />
		Recently I have started	to develop software for Android phones.
		</p>

	</article>

	<article>

		<h2>References</h2>

		<p>
		References and recommendations are available on request.
		</p>

	</article>

	<article>

	    <p>
		<a href="cv/chris-newey-cv.pdf">pdf version</a>
	    </p>


	</article>


	<?php
	include_once('footer.php');
	?>

</div>  <!-- end div mainWrapper -->
</body>
</html>
