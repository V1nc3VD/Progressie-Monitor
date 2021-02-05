<?php
include("../connect_db.php");
include("../functions.php");

$sql = "SELECT * FROM klasregel WHERE Klas = '$klas' ";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }


?>