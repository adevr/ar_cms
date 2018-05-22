<?php
/**
 * Created by PhpStorm.
 * User: loba
 * Date: 10-05-2018
 * Time: 16:03
 */
?>

<html>
<head>
    <title>arcms</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
/**
 * styleshets and bootstrap scripts
 */
?>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet"><?php
    /**
     *custom stylesheet */
    ?>

    <link rel="stylesheet" href="../assets/css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Jura:400,500,700" rel="stylesheet">

    <?php
/**
 * custom js files
 */
?>


</head>
<body>
    <div class="login">
        <div class="cms-logo">
            <img id="logo" src="../assets/img/logocms.png">
        </div>
        <div class="cms-login">
            <div class="form-intro">
                <img src="../assets/img/admin.png" id="header-img">
                <h3>Welcome back Admin</h3>
            </div>
            <div class="form-text">
            <form action="dashboard.php" method="post">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="user" type="text" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-asterisk"></i></span>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                    <span class="input-group-addon" onclick="seePass()"><i class="glyphicon glyphicon-eye-open"></i></span>
                </div>
                <button class="btn info" type="submit">Login</button>
                <button class="btn default" stype="reset">Reset</button>
            </form>
                <a id="fup" href="#">Forgot your username/password? -></a>
            </div>
        </div>
    </div>

    <script src="//code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="../assets/js/index.js"></script>

</body>
</html>
