<?php

session_start();
require("Functions.php");
require("Class/User.php");

CheckIfCanBeLog();


        if (isset($_POST["Login"])) {
            $UserLog = $bdd->query("SELECT * FROM users WHERE Pseudo ='".$_POST['L_pseudo']."'");
            $UserExist = $UserLog->fetch();

            if ( $UserExist["Pseudo"] == $_POST['L_pseudo'] && $UserExist["Password"] == $_POST['L_password']) {
                $LoginAccount = "You're Logged.";
                $_SESSION['Logged'] = 1;
                sleep(1);
                header("Location: Index.php");
                $_SESSION['Username'] = $UserExist["Pseudo"];
            } 
            else {
                $LoginAccount = " Your pseudo or your password is wrong.";
            }
        }
        else{
            $LoginAccount = " ";
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="Img/Website_Icon.png">
    <link rel="stylesheet" type="text/css" href="style/style.css" />
    <link rel="stylesheet" type="text/css" href="style/menu.css" />
    <link rel="stylesheet" type="text/css" href="style/home.css" />
    <link rel="stylesheet" type="text/css" href="style/login.css" />
    
    <title>Otakupédia / Login</title>

</head>
<body>
    <?php include ("Menu.php")?>


    <div class="content">

        <form class="Login" action="" method="Post">

            <p class="LoginAccount"><?php echo $LoginAccount ?></p>

            <label>Enter your Pseudo : </label>
            <input type="text" name="L_pseudo" id="L_pseudo" required>

            <label>Enter your Password : </label>
            <input type="password" name="L_password" id="L_password" required>

            <input type="submit" name="Login" value="Login">

        </form>

    </div>
    
</body>
</html>