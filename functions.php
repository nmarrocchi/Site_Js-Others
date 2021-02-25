<?php

try{
    $bdd = new PDO("mysql:host=localhost;dbname=Otaku-Stream","root","root");
    $Animes = $bdd->query("SELECT * FROM Animes");
    $Movies = $bdd->query("SELECT * FROM Animes ORDER BY Year DESC");
}

catch(PDOException $e){
    echo $e->getMessage();
}


/* Check if user is logged */
function CheckIfLog(){
    if(isset($_SESSION['Logged'])){
        if($_SESSION['Logged'] == 1){
            header('Location: Index.php');
        }
        else{}
    }
    else{}
}

/* Check if custom pp for user is valid or not and send the valid path */
function UserPicture(){
    $filepath = 'Img/Users/'.$_SESSION["Username"].'.png';

    if (file_exists($filepath)) {
        echo $filepath;
    } else {
        echo 'Img/guest.png';
    }
}
?>