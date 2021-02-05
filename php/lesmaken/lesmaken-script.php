<?php

  
  
  include("./connect_db.php");
  include("./functions.php");

  $docent = sanitize($_POST["docent"]);
  $vakken = sanitize($_POST["vakken"]);
  $cursus = sanitize($_POST["cursus"]);
  $deadline = sanitize($_POST["deadline"]);
  $opdracht = sanitize($_POST["opdracht"]);
  $klas = sanitize($_POST["klas"]);
  $leerling = sanitize($_POST["leerling"]);

  
  if (!empty($docent)&!empty($vakken)) {

  // Maak een select-query om te controleren of de docent al een les heeft in dat vak.
  $sql = "SELECT * FROM les WHERE docent = '$docent' AND vak = '$vakken'";

  // Stuur de query af op de database
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result)) {
    // Docent heeft all een les met dit vak
    echo '<div class="alert alert-info" role="alert">Deze docent heeft all een les met dit vak</div>';
    header("Refresh: 4; url=../../index/php?content=lesmaken");
  } else {
    $hash = RandomString(32);
    $password_hash = password_hash($password.$hash, PASSWORD_BCRYPT);
    //var_dump($password_hash);
    $sql = "INSERT INTO `les` (`docent`,
                                  `vak`, 
                                  `cursus`,
                                  `deadline`,
                                  `opdracht`,
                                  `klas`,
                                  `leerling`)
                          VALUES ('$docent',
                                  '$vakken', 
                                  '$cursus',
                                  '$deadline',
                                  '$opdracht',
                                  '$klas',
                                  '$leerling')";
  
    $result = mysqli_query($conn, $sql);
echo mysqli_error($conn);
    // Hiermee vraag je de door autonummering gemaakt id op
    $id = mysqli_insert_id($conn);
    echo 'U heeft een les gemaakt. <br> u word nu doorgestuurd naar de home pagina';
    header( "refresh:5;url=../../index.php" );
  }

} else {
  echo '<div class="alert alert-danger" role="alert">U heeft niks in gevult.</div>';
  header("Refresh: 4; url=../../index.php");
}
