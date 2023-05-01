<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="dane";


$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
	die("Connection failed: " . $conn->connect_error);
}

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";

$tytul = $_POST['tytul'];
$gatunek = $_POST['gatunek'];
$rok_produkcji = $_POST['rok_produkcji'];
$ocena = $_POST['ocena'];

$sql = "INSERT INTO `filmy`(`gatunki_id`, `rezyserzy_id`, `tytul`, `rok`, `ocena`) VALUES ('$gatunek','1','$tytul','$rok_produkcji','$ocena')";

$result = $conn->query($sql);

echo "Film $tytul został dodany do $dbname";

$conn->close();

?>