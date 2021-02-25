<?php

session_start();
require("Functions.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="Img/Website_Icon.png">
    <link rel="stylesheet" type="text/css" href="style/style.css" />
    <link rel="stylesheet" type="text/css" href="style/menu.css" />
    <link rel="stylesheet" type="text/css" href="style/account.css" />
    <title>Otakupédia / Your Account</title>
</head>
<body>
    <?php 
        include ("menu.php");
        $UserInscription = $bdd->query("SELECT DATE_FORMAT(Inscription, ' %d/%m/%Y ') AS Inscription FROM users WHERE Pseudo = '".$_SESSION["Username"]."'");
        $UserDate = $UserInscription->fetch();
        
    ?>


    <div class="content">

        <h1><?php echo $_SESSION["Username"] ?></h1>

        <img class="Panel_pp" src=<?php UserPicture()?> alt="pp">
        <h3>Registration date : <?php echo $UserDate[0] ?></h3>

    </div>
    
</body>
</html>