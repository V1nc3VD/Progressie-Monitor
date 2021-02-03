<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/6dba4b6021.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="../../style/css/main.css" media="screen" />
    <link rel="stylesheet" href="./aos/aos.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../img/icon-logo.png" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>F1-MBO Tournament</title>
</head>

<body>

<nav>
    <ul class="headernav">
        <li><a href="../../index.php">Home</a></li>
        
        <li><a href="../information.php">Information</a></li>
        <!-- 
        <li><a href="../tournament/createtournament.php">Start a tournament</a></li>
        
        <li><a href="../tournament/manage-tournament.php">Manage tournament</a></li>
        
        <li><a href="../tournament/join-tournament.php">Join a tournament</a></li> -->

        </ul>

        <div>
            <a href="./aanmelden.php">Login</a>

    </nav>


    <form action="./register-script.php" method="post">

        <div class="content">

            <h1>REGISTREREN</h1>

            <b>Username:</b>

            <br><br>

            <input type="text" name="username" id="" class="backroundcolor" placeholder="Username..." required>

            <br><br>

            <b>Email:</b>

            <br><br>

            <input type="text" name="email" id="" class="backroundcolor" placeholder="Email..." required>

            <br><br>

            <b>Wachtwoord:</b>

            <br><br>

            <input type="password" name="wachtwoord" id="" class="backroundcolor" placeholder="Wachtwoord..." required>

            <br><br>

            <input type="checkbox" name="" id="" required> <a href="./termsofuse.html" class="terms">Terms of use</a>

            <br><br>

            <b>heeft u al een prachtig F1 account? Klik dan <a style="color: #fbff00;" href="../login/aanmelden.php">Hier</a>!</b>

            <br><br>

            <button style="height: 5vh;" id="submit" class="btn" type="submit" value="Submit">Maak je account!</button>


        </div>
    </form>

    <?php include("../../includes/footer.php"); ?>

    <script src="../aos/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>