<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "egzamin";

$conn = new mysqli($servername, $username, $password, $dbname);


if(isset($_POST['pozycja']))
{
  $pozycja = $_POST['pozycja'];
}


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (empty($pozycja)) 
{
echo "<li>pozycja is empty</li>";
}
else 
{


$sql = "SELECT imie, nazwisko FROM zawodnik WHERE pozycja_id=$pozycja";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
while($row = $result->fetch_assoc()) 
{
    echo "<li>";
  	//1
    // echo "id: " . $row["id"]. " - zespol1: " . $row["zespol1"]. " zespol2: " . $row["zespol2"] . " wynik: " . $row["wynik"]. " data_rozgrywki: " . $row["data_rozgrywki"]. "<br>";
    echo $row["imie"]. " " . $row["nazwisko"];
    //2
    echo "</li>";
}
} 
else 
{
  echo "<li>0 results</li>";
}
}

?>

</body>
</html>