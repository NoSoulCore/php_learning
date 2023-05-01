<!DOCTYPE html>
<html lang="Pl-pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Rozgrywki futbolowe</title>
	<link rel="stylesheet" href="styles1.css">
</head>
<body>
		<div class="strona">
			<div class="baner">
			<h2>Światowe rozgrywki piłkarskie</h2>
		<img src="obraz1.jpg" alt="boisko">
		</div>
		<div class="mecze">
		<!-- skrypt1 -->
		<?php require "skrypt1.php"; ?>
		<!-- <section class="informacja">
			<h3>zespół 2 - zespół 3</h3>
			<h4>2-3</h4>
			<p>w dniu 2000-10-10</p>
		</section> -->
		</div>
		<div class="glowny">
			<h2>Reprezentacja Polski</h2>
		</div>
		<div class="lewy">
			<p>Podaj pozycję zawodników (1-bramkarze, 2-obrońcy, 3-pomocnicy, 4-napastnicy):</p>
			<form method="POST" action="futbol.php">
				<input type="number" min="1" max="4" name="pozycja">
				<input type="submit" name="Sprawdź">
			</form>
			<ul>
				<?php include "skrypt2.php"; ?>
			</ul>
		</div>
		<div class="prawy">
		<img src="zad1.png" alt="piłkarz">
		<p>Autor: PESEL</p>
	</div>
	</div>

	
</body>
</html>