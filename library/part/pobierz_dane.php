<?php
$sql = "SELECT * FROM `book` WHERE 1";
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