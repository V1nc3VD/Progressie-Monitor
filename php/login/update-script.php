<?php
session_start();

include("./connect_db.php");

$pagerole = $_SESSION["userrole"];

$id = $_POST["id"];
$username = $_POST["username"];
$userrole = $_POST["userrole"];
$naam = $_POST["naam"];

$sql = "UPDATE `tournament` SET `username` = '$username', `userrole` = '$userrole', `naam` = '$naam' WHERE `tournament`.`id` = $id";

mysqli_query($conn, $sql);

switch ($pagerole) {

    case 'gebruiker':
      header("location: ./homes/gebruikerhome.php");
    break;

    case 'admin':
      header("location: ./homes/adminhome.php");
    break;

    case 'superadmin':
      header("location: ./homes/superadminhome.php");
    break;

  }
  ?>