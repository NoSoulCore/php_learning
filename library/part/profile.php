<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Strona w stronie</title>
	<link rel="stylesheet" type="text/css" href="style/style_2.css">
</head>
<body>
	<div class="strona">
		<div class="banner">
			<?php require 'header.php';?>
		</div>
	<div class="profile">
		<div class="nickname">
			<img src="picture/green-tea.jpg" class="avatar" style="border-radius: 50%; height: 100px; border: 1px solid whitesmoke;">
			<p><b>Imie Nazwisko</b></p>
			<p>edit</p>
		</div>
		<div class="dane">
			<h3>Dane</h3>
			<p>+48 123 456 789</p>
			<p>testowy@mail.com</p>
		</div>
		<div class="borrow">
			<div class="book">
				<h3>Wypożyczone</h3>
				<table>
				<tr>
				<th>Nazwa</th>
				<th>Autor</th>
				<th>Gatunek</th>
				</tr>
<?php
	require 'script.php';
	// list_of_books();
$sql = "SELECT `book`.`name`, `book`.`autor`, `book`.`genre`, `user`.`nickname` FROM `borrow` INNER JOIN `user` ON `borrow`.`user_id` = `user`.`id` INNER JOIN `book` ON `borrow`.`book_id` = `book`.`id`";
$result = $conn->query($sql);

if($result->num_rows > 0) 
{
// output data of each row
while($row = $result->fetch_assoc()) 
{
    // echo " Nazwa: " . $row["name"]. " Autor: " . $row["autor"]. " Gatunek: " . $row["genre"]. "<br>";
    echo "<tr>
        <td title='link do ksiazki...'><b>".$row["name"]."</b></td>
        <td>" . $row["autor"]. "</td>
        <td>" . $row["genre"]. "</td>
    </tr>";
}

}
else
{
  echo "0 results";
}
$conn->close();

?>
			</table>
			</div>
		</div>
		<?php
		//require("profile.php");
		//self destruction
		// if($GLOBALS["a"] < 10)
		// 	{
		// 		$GLOBALS["a"]++;
		// 		// require("profile.php");
		// 	} 
		// ?>
	</div>
		<div class="footer">
			<?php 
				require("footer.php");
			?>
		</div>
	</div>
</body>
</html>