<?php

  
  
  include("./connect_db.php");
  include("./functions.php");

  $docent = sanitize($_POST["docent"]);
  $vakken = sanitize($_POST["vakken"]);
  $cursus = sanitize($_POST["cursus"]);
  $vantijd = sanitize($_POST["vantijd"]);
  $tottijd = sanitize($_POST["tottijd"]);
  $opdracht = sanitize($_POST["opdracht"]);
  $leerlingleerjaar = sanitize($_POST["leerlingleerjaar"]);
  $leerling = sanitize($_POST["leerling"]);

  
  if (!empty($docent)&!empty($vakken)) {

  // Maak een select-query om te controleren of de docent al een les heeft in dat vak.
  $sql = "SELECT * FROM lessen WHERE docent = '$docent' OR vakken = '$vakken'";

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
                                  `vantijd`,
                                  `tottijd`,
                                  `opdracht`,
                                  `leerlingleerjaar`,
                                  `leerling`)
                          VALUES ('$docent',
                                  '$vak', 
                                  '$cursus',
                                  '$vantijd',
                                  '$tottijd',
                                  '$opdracht',
                                  '$leerlingleerjaar',
                                  '$leerling')";
  
    $result = mysqli_query($conn, $sql);
echo mysqli_error($conn);
    // Hiermee vraag je de door autonummering gemaakt id op
    $id = mysqli_insert_id($conn);
    echo 'U heeft een les gemaakt. <br> u word nu doorgestuurd naar de home pagina';
    header( "refresh:5;url=../../index.php?content=index" );
  }

} else {
  echo '<div class="alert alert-danger" role="alert">U heeft niks in gevult.</div>';
  header("Refresh: 4; url=../../index.php?content=lesmaken");
}
?>