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
    <link rel="stylesheet" type="text/css" href="style/home.css" />
    <title>Otakupédia / Home</title>
</head>
<body>
    <?php include ("Menu.php")?>


    <div class="content">

        <h1>Welcome to Otakupédia</h1>
        <img src="Img/RemXRam.gif" alt="Rem x Ram">

        <?php HomeMessage() ?>

    </div>
    
</body>
</html>