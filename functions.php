<?php

try{
    $bdd = new PDO("mysql:host=192.168.65.60;dbname=otakupédia","root","root");
    $Animes = $bdd->query("SELECT * FROM animes ORDER BY Name ASC");
}

catch(PDOException $e){
    echo $e->getMessage();
}

/* Change Message if user is logged or not */
function HomeMessage(){
    if(isset($_SESSION['Logged'])){
        if($_SESSION['Logged'] == 1){}
        else{
            echo '<p class="AccessMsg">To access other pages, please log in or register</p>' ;
        }
    }
    else{
        echo '<p class="AccessMsg">To access other pages, please log in or register</p>' ;
    }
}

/* Check if user is logged */
function CheckIfLog(){
    if(isset($_SESSION['Logged'])){
        if($_SESSION['Logged'] == 1){}
        else{
            header('Location: Index.php');
        }
    }
    else{
        header('Location: Index.php');
    }
}

/* Check if user is logged and if isn't, he can login */
function CheckIfCanBeLog(){
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