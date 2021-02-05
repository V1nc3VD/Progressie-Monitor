<?php
include("../connect_db.php");
include("../functions.php");

$klas = "AM2A";
$sql = "SELECT * FROM klasregel WHERE Klas = '$klas' ";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "Cursusnaam: " . $row["CursusNaam"]. "<br>";
    }
    }
?>