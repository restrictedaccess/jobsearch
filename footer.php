

<footer>

	<div style="clear:both">
	</div>

	<br />
	<br />
	<hr>
	<p>

		<div style="float:left; font-size: 70%;" >
			Copyright &copy; 20012-
			<?php
				print(date('Y')); // Current year in YYYY format
			?>
			Chris Newey


			&nbsp;
			&nbsp;
			Last Modified :
			<?php
				$date = new DateTime(date('Y-m-d'));
				$date->modify('-3 day');
				echo $date->format('d/m/Y');
			?>

		</div>

		&nbsp;
		&nbsp;

		<div style="float:right;">

			<a href="https://freedns.afraid.org/">Free DNS</a>
			&nbsp; &nbsp;


			<a href="http://validator.w3.org/check?uri=<?php print(getUrl()); ?>">
				<img class="validmarkup"
					src="images/validhtml5.jpg"
					alt="Valid HTML5"
					title="Validate as HTML 5" />
			</a>

			<a href="http://jigsaw.w3.org/css-validator/check/referer">
				<img class="validmarkup"
					src="images/validcss3.gif"
					alt="Valid CSS"
					title="Validate as CSS 3" />
			</a>

		</div>




</footer>

