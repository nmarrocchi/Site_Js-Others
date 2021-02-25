<?php

session_start();
require("functions.php");

CheckIfLog();


        if (isset($_POST["Register"])) {
            
                $UserExist = $bdd->query("SELECT COUNT(*) FROM users WHERE Pseudo ='".$_POST['pseudo']."'");
                $UserExist = $UserExist->fetch();

                if ($UserExist["COUNT(*)"] > 0) {
                    $CreateAccount = "This username is taken...";
                } 
                else {
                    $date = date("Y-m-d");
                    $CreateUser = $bdd->query("INSERT INTO users(Pseudo, Password, Inscription) VALUES('".$_POST['pseudo']."','".$_POST['password']."','".$date."')");
                    $CreateAccount = "Your account has been created";
                    
                }
        }
        else{
            $CreateAccount = " ";
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
    <link rel="stylesheet" type="text/css" href="style/register.css" />
    <title>Otaku-Stream / Register</title>

        <style>
         .AccountCreate{
             content: 'This Username Is Already taken...';
             color: red;
         }
        </style>

</head>
<body>
    <?php include ("menu.php")?>


    <div class="content">

        <form class="Register" action="" method="Post">

                <p class="CreateAccount"><?php echo $CreateAccount ?></p>

                <label>Enter your Pseudo : </label>
                <input type="text" name="pseudo" id="pseudo" maxlength = "10" required>
            
                <label>Enter your Password : </label>
                <input type="password" name="password" id="password" maxlength = "30" required>

            <input type="submit" name="Register" value="Register">
    
        </form>

    </div>
    
</body>
</html>