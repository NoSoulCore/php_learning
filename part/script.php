<?php 
// require 'connect.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


//lista_wszystkich_książek
function list_of_books()
{

$sql = "SELECT * FROM `book` WHERE 1";
$result = $conn->query($sql);

if($result->num_rows > 0) 
{
while($row = $result->fetch_assoc()) 
{
    // echo " Nazwa: " . $row["name"]. " Autor: " . $row["autor"]. " Gatunek: " . $row["genre"]. "<br>";
    echo "<ul>
        <li><b>".$row["name"]."</b></li>
        <li>" . $row["autor"]. "</li>
        <li>" . $row["genre"]. "</li>
    </ul>";
}

}
else
{
  echo "0 results";
}


}
//wypożyczone książki
function list_of_borrow_books()
{
$sql = "SELECT `book`.`name`, `book`.`autor`, `book`.`genre`, `user`.`nickname` FROM `borrow` INNER JOIN `user` ON `borrow`.`user_id` = `user`.`id` INNER JOIN `book` ON `borrow`.`book_id` = `book`.`id`";
$result = $conn->query($sql);

if($result->num_rows > 0) 
{
// output data of each row
while($row = $result->fetch_assoc()) 
{
    // echo " Nazwa: " . $row["name"]. " Autor: " . $row["autor"]. " Gatunek: " . $row["genre"]. "<br>";
    echo "<ul>
        <li><b>".$row["name"]."</b></li>
        <li>" . $row["autor"]. "</li>
        <li>" . $row["genre"]. "</li>
    </ul>";
}

}
else
{
  echo "0 results";
}
$conn->close();
}



?>