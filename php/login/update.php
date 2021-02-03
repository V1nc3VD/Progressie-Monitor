<?php
$userrole = $_GET["userrole"];
$naam = $_GET["naam"];
$username = $_GET["username"];
$id = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Standaard css en js -->
    <link rel="stylesheet" href="./aos/aos.css">
    <link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet">
    <!-- einde Standaard css en js -->
    <!-- eigen css favicon js en title-->
    <link rel="shortcut icon" href="../img/logo.gif" type="image/x-icon">
    <link rel="stylesheet" href="../style/css/index.css">
    <link rel="stylesheet" href="../js/index.js">
    <title>Tournament</title>
    <!-- einde eigen css favicon js en title-->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>

<body>

<nav>
    <ul class="headernav">
        <li><a href="./index.php">Home</a></li>
        
        <li><a href="../information.php">Information</a></li>
        <!-- 
        <li><a href="../tournament/createtournament.php">Start a tournament</a></li>
        
        <li><a href="../tournament/manage-tournament.php">Manage tournament</a></li>
        
        <li><a href="../tournament/join-tournament.php">Join a tournament</a></li> -->

    </ul>

<div>
<a href="./aanmelden.php">Login</a>
    <a href="../login/logout.php">Logout</a></div>

</nav>

    <form action="./update-script.php" method="post" class="content">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <p class="white">naam:</p>
        <input class="inputbox" type="text" placeholder="Vul naam in..." name="naam" value="<?php echo $naam; ?>">
        <br>
        <br>

        <p class="white">username:</p>
        <input class="inputbox" type="username" placeholder="Vul username in..." name="username" value="<?php echo $username ?>">
        <br>
        <br>
        <p class="white">userrole</p>
        <select class="inputbox inputcenter" name="userrole" value="<?php echo $userrole ?>">
            <option value="gebruiker">gebruiker</option>
            <option value="admin">admin</option>
            <option value="superadmin">superadmin</option>
        </select>
        <br>
        <br>
        <div class="g-recaptcha recap" data-sitekey="6Lcc390UAAAAAEBJ8c43bO0jVsBtwisYPnrk_6-e" ></div>
        <br>

        <button type="submit" class="btn">verstuur</button>
    </form>


    <footer class="footerlayout scolor" data-aos="zoom-in" data-aos-delay="150">
        @copyright Tournament 2019-2020
        <div class="backgroundimgfooter"></div>
    </footer>
    <script src='https://www.google.com/recaptcha/api.js'></script>