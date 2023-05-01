<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "egzamin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

function createBlock()
{
	echo "	<section class=\"informacja\">
			<h3>zespół 1 - zespół 2</h3>
			<h4>2-3</h4>
			<p>w dniu 2000-10-10</p>
			</section>";
}

$sql = "SELECT * FROM rozgrywka";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  	//1
    // echo "id: " . $row["id"]. " - zespol1: " . $row["zespol1"]. " zespol2: " . $row["zespol2"] . " wynik: " . $row["wynik"]. " data_rozgrywki: " . $row["data_rozgrywki"]. "<br>";
    //2
    echo "	<section class=\"informacja\">
			<h3>". $row["zespol1"]." - ". $row["zespol2"]."</h3>
			<h4>" . $row["wynik"]. "</h4>
			<p>w dniu " . $row["data_rozgrywki"]. "</p>
			</section>";
  }
} else {
  echo "0 results";
}

// createBlock();

mysqli_close($conn);
?>
