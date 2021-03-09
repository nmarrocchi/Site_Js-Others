<?php

session_start();
require("Functions.php");
CheckIfLog()

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="Img/Website_Icon.png">
    <link rel="stylesheet" type="text/css" href="style/style.css" />
    <link rel="stylesheet" type="text/css" href="style/menu.css" />
    <link rel="stylesheet" type="text/css" href="style/chosenAnime.css" />
    <title>Otakupédia / <?php echo $_GET['Anime']?></title>
</head>
<body>
    <?php 
        include ("Menu.php");
        $Anime = $bdd->query("SELECT * FROM animes WHERE Name = '".$_GET['Anime']."'");
        While( $Anime_Infos = $Anime->fetch() )
        {
    ?>


    <div class="Anime_Content">

        <table>
            <tr>
                <td><img src="Img/Affiches/<?php echo $Anime_Infos['Name']?>.jpg"></td>
                <td class="Anime_Infos">
                    <ul>
                        <li class="Anime_Name"><?php echo $Anime_Infos['Name']?></li>
                        <li class="Anime_Year"> - <?php echo $Anime_Infos['Year']?></li>
                        <li class="Anime_Seasons"><?php echo $Anime_Infos['Seasons']?></li>
                        <li class="Anime_Categories">
                            <p><?php echo $Anime_Infos['Category_1']?></p>
                            <p> - </p>
                            <p><?php echo $Anime_Infos['Category_2']?></p>
                        </li>
                        <li class="Separator">--------------------------------------------------</li>
                        <li class="Anime_Description"><?php echo $Anime_Infos['Description']?></li>
                    </ul>
                </td>
            </tr>
        </table>


    </div>

    <?php } ?>
    
</body>
</html>