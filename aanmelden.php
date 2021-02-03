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
    <title>pmo Product</title>
</head>

<body>

    

    <form action="./php/login/login-script" method="post">

        <div class="content">

            <h1>LOGIN</h1>

            <b>Name:</b>
            <br>
            <br>
            <input type="text" name="name" id="name" class="loginname backroundcolor" placeholder="Name..." required>

            <br>
            <br>

            <b>Wachtwoord:</b>
            <br>
            <br>
            <input type="password" name="password" id="password" class="loginpassword backroundcolor" placeholder="Password..." required>

            <br>
            <br>

            <b>Heeft u nog geen account? Klik dan <a style="color: #fbff00;" href="">hier</a>!</b>

            <br>
            <br>

            <button id="submit" class="btn" type="submit" value="Submit">Login</button>

        </div>
    </form>





    <script src="../aos/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>