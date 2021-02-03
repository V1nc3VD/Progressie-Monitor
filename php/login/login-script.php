<?php
session_start();

include("./connect_db.php");
include("./functions.php");

if (isset($_POST) && !empty($_POST)) {

  $name = sanitize($_POST["name"]);
  $password = sanitize($_POST["password"]);
  if (!empty($name) && !empty($password)) {

    $sql = "SELECT u.*, r.name AS role FROM user AS u LEFT JOIN roles AS r ON u.role_id = r.role_id WHERE u.username = '$name' OR u.email = '$name'";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) ==  1) {

      $record = mysqli_fetch_assoc($result);
      
      $password = $password . $record["hash"];
      $blowfish_password =  $record["password"];

      if (password_verify($password, $blowfish_password)) {

        // exit;
        $_SESSION["id"] = $record["user_id"];
        // $_SESSION["userrole"] = $record["userrole"];
        $_SESSION["username"] = $record["username"];
        $_SESSION["naam"] = $record["username"];

        switch ($record["role"]) {

          case 'admin':
            header("location: ../admin/adminpage.php");
            break;

          case 'racehost':
            header("location: ../admin/racehostpage.php");
            break;

          case 'driver':
            header("location: ../admin/driverpage.php");
            break;

          case 'user':
            $user_id = $record["user_id"];
            header("location: ../admin/userpage.php?userid=$user_id");
            break;


          default:
            header("location: ./login-wrong.php");
            break;
        }
      } else {
        // Password bestaat niet
        include("./login-wrong.php");
      }
    } else {
      // username bestaat niet
      include("./login-wrong.php");
    }
  }
}
