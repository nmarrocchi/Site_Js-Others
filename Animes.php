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
    <link rel="stylesheet" type="text/css" href="style/animes.css" />
    <title>Otakupédia / Animes</title>
</head>
<body>

<?php include ("Menu.php")?>


    <div class="content">

    <?php

        while( $Animes_List = $Animes->fetch() )
        {

    ?>

            <a href="ChosenAnime.php?Anime=<?php echo $Animes_List['Name']?>">
                <div class="Anime">

                <table>
                    <tr>
                        <td><img src="Img/Affiches/<?php echo $Animes_List['Name']?>.jpg"></td>
                        <td class="Anime_Infos">
                            <ul>
                                <li class="Anime_Name"><?php echo $Animes_List['Name']?></li>
                                <li class="Anime_Year"> - <?php echo $Animes_List['Year']?></li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </a>

        </div>


    <?php } ?>

    </div>
    
</body>
</html>