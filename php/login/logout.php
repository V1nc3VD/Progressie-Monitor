<?php
  session_unset();
  // session_destroy();

  header("Refresh: 7; url=../../index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <!-- Standaard css en js -->
    <link rel="stylesheet" href="./aos/aos.css">
    <link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet">
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <!-- einde Standaard css en js -->
    <!-- eigen css favicon js en title-->
    <link rel="shortcut icon" href="./img/logo.gif" type="image/x-icon">
    <link rel="stylesheet" href="../style/css/index.css">
    <link rel="stylesheet" href="../style/css/contact.css">
    <link rel="stylesheet" href="../style/css/game.css">
    <link rel="stylesheet" href="../style/css/aanmelden.css">
    <title>Tournament</title>
    <!-- einde eigen css favicon js en title-->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>

    <div class="logoutscreentekst1 logoutmargintop">
      <h1>U bent uitgelogt!</h1>
    </div>
    <div class="logoutscreentekst2">
      <h3>dankuwel voor het bezoeken van onze website.</h3>
    </div>
    <div class="logoutscreentekst3">
    <h5>U word automatish doorgestuurd naar de home pagina.</h5>
    </div>

    <div class="logoutscreentekst3">
      <h6>Zo niet klik <a style="text-decoration: none; color: lightblue;" href="./aanmelden.html">HIER</a> </h6>
    </div>

    <footer class="footerlayout scolor" data-aos="zoom-in" data-aos-delay="150">
        @copyright Tournament 2019-2020
        <div class="backgroundimgfooter"></div>
        </footer>
<script src="./aos/aos.js"></script>
<script>
    AOS.init();
</script>

</body>
</html>