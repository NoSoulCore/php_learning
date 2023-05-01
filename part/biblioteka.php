<!DOCTYPE html>
<html>
<head lang="pl-PL">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="strona">
		<div class="banner">
			<?php require 'header.php' ?>
		</div>
		<div class="content">
			
			<div class="list">
			<h2>Książki</h2>

			<div class="book">
				<!-- <ul>
				<li><b>Nazwa</b></li>
				<li>Autor</li>
				<li>Gatunek</li>
				</ul> -->
				<table>
					<tr>
						<th>Nazwa</th>
						<th>Autor</th>
						<th>Gatunek</th>
					</tr>
				
				<?php
					require("connect.php");
					require 'pobierz_dane.php';
				?>
				</table>
			</div>
			</div>
			<div class="genre">
			<ul title="work in progress...">
				<li>Horror</li>
				<li>Tragedia</li>
				<li>Fantasy</li>
			</ul>
			</div>
			<div class="tak"></div>
		</div>
		<div class="footer">
			<?php require 'footer.php' ?>
		</div>
	</div>
</body>
</html>