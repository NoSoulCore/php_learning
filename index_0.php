<!DOCTYPE html>
<html>
<head lang="pl-PL">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="part/style/style_1.css">
</head>
<body>
	<div class="strona">
		<div class="header">
		<h1>Mini Lib</h1>
			<ul>
				<li><a href="part/biblioteka.php">Biblioteka</a></li>
				<li><a href="part/profile.php">Profil</a></li>
				<li title="work in progress...">Forum</li>
			</ul>
		</div>
		<div class="left_panel">
			<h2>Książka</h2>
			<div class="list">
			<div class="book">
				<!-- <ul>
				<li><b>Nazwa</b></li>
				<li>Autor</li>
				<li>Gatunek</li>
				</ul> -->
				<?php
					require("part/connect.php");
					require 'part/pobierz_dane.php';
				?>
			</div>
			</div>
			<div class="genre">
			<ul>
				<li>Horror</li>
				<li>Tragedia</li>
				<li>Fantasy</li>
			</ul>
			</div>
		</div>
		<div class="right_panel">
			your add could be here
		</div>
		<div class="footer">
			<?php require 'part/footer.php' ?>
		</div>
	</div>
</body>
</html>