<?php
  session_start();
    include("./connect_db.php");

    $id = $_GET["id"];
    $pagerole = $_SESSION["userrole"];

    $sql = "DELETE FROM tournament WHERE id = $id";

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