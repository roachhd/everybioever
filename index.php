<?php $bios = file('bios.txt', FILE_IGNORE_NEW_LINES); ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<title>Every Bio Ever</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,900">
	</head>

	<body>
		<div class="row row-expanded">
			<div class="container">
				<h1>Every Bio Ever</h1>
				<blockquote id="bio">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</blockquote>
				<button id="reload" class="reload">Reload</button>
			</div>
		</div>

		<div class="row">
			<div class="container">
				<div class="share">
					<a href="https://twitter.com/home?status=http://everbioever.com/"><img src="images/twitter.svg" alt=""></a>
					<a href="https://www.facebook.com/sharer/sharer.php?u=http://everybioever.com/"><img src="images/facebook.svg" alt=""></a>
					<a href="https://plus.google.com/share?url=http://everbioever.com/"><img src="images/googleplus.svg" alt=""></a>
				</div>

				<p class="colophon">a thing by <a href="http://galengidman.com/">Galen Gidman</a> and <a href="http://github.com/galengidman/everybioever/contributors">friends</a><br><a href="https://github.com/galengidman/everybioever#how-to-add-a-bio">add your own</a></p>
			</div>
		</div>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

		<script>
			$(function() {
				function pickBio() {
					$('#bio').text(bios[Math.floor(Math.random() * bios.length)]);
				};

				pickBio();

				$('#reload').click(function() {
					pickBio();
				});

			});

			var bios = [<?php
				$counter = 1;

				foreach ($bios as $bio) {
					if ($counter != 1) echo ', ';

					echo '"' . $bio . '"';

					$counter++;
				}
			?>]
		</script>

		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-39934767-1', 'everybioever.com');
			ga('send', 'pageview');
		</script>
	</body>
</html>