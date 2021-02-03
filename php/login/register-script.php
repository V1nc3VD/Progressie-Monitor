<?php

  
  
  include("./connect_db.php");
  include("./functions.php");

  $username = sanitize($_POST["username"]);
  $password = sanitize($_POST["wachtwoord"]);
  $email = sanitize($_POST["email"]);

  
  if (!empty($username)) {

  // Maak een select-query om te controleren of het e-mailadres al bestaat.
  $sql = "SELECT * FROM user WHERE username = '$username' OR email = '$email'";

  // Stuur de query af op de database
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result)) {
    // Email is al in gebruik
    echo '<div class="alert alert-info" role="alert">Het door u ingevoerde e-mailadres is al in gebruik, kies een ander e-mailadres</div>';
    header("Refresh: 4; url=./user.html");
  } else {
    $hash = RandomString(32);
    $password_hash = password_hash($password.$hash, PASSWORD_BCRYPT);
    //var_dump($password_hash);
    $sql = "INSERT INTO `user` (`user_id`,
                                  `username`, 
                                  `password`,
                                  `email`,
                                  `hash`)
                          VALUES (NULL,
                                  '$username',
                                  '$password_hash',
                                  '$email',
                                  '$hash')";
  
    $result = mysqli_query($conn, $sql);
echo mysqli_error($conn);
    // Hiermee vraag je de door autonummering gemaakt id op
    $id = mysqli_insert_id($conn);
    echo 'Dankuwel voor het maken van een account. <br> u word nu doorgestuurd naar de inlog pagina';
    header( "refresh:5;url=../aanmelden.php" );
  }

} else {
  echo '<div class="alert alert-danger" role="alert">U heeft geen e-mailadres ingevoerd, vul een e-mailadres in.</div>';
  header("Refresh: 4; url=./useren.html");
}
?>