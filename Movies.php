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
    <link rel="stylesheet" type="text/css" href="style/animes.css" />
    <title>Otakupédia / Movies</title>
</head>
<body>
<?php include ("Menu.php")?>


    <div class="content">

    <?php

        while( $Movies_List = $Movies->fetch() )
        {

            ?>

            <a href="Movie.php?Movie=<?php echo $Movies_List['Name']?>">
                <div class="Movie">

                <table>
                    <tr>
                        <td><img src="Img/Affiches/<?php echo $Movies_List['Name']?>.jpg"></td>
                        <td class="Movie_Infos">
                            <ul>
                                <li class="Movie_Name"><?php echo $Movies_List['Name']?></li>
                                <li class="Movie_Year"> - <?php echo $Movies_List['Year']?></li>
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