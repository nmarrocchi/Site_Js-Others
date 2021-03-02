<div class="menu_div">

        <!-- Login Button / Sign in Button / Account / Disconnect button -->
        <?php 

        if(isset($_SESSION['Logged'])){
                if($_SESSION['Logged'] == 1){

                        echo('

                                <div class="User_Account"><a href="Account.php">
                                        <table>
                                                <tr>
                                                        <td class="User_Account_Panel">
                                                                <img class="User_pp" src="
                        ');

                        UserPicture();
                        
                        echo(' ">
                                                                <p>'.$_SESSION["Username"].'</p>
                                                        </td>
                                                        <td>
                                                                <a href="Disconnect.php">
                                                                        <img class="Disconnect" src="Img/Disconnect.png" alt="Disconnect">
                                                                </a>
                                                        </td>
                                                <tr>
                                        </table>
                                </a></div>
                        ');


                }
                else{

                        echo('

                                <ul class="Account_Log">
                                        <a href="Register.php"><li>Register</li></a>
                                        <a href="Login.php"><li>Login</li></a>
                                </ul>
                        ');

                }
        }
        else{
                echo('

                <ul class="Account_Log">
                        <a href="Register.php"><li>Register</li></a>
                        <a href="Login.php"><li>Login</li></a>
                </ul>
        ');   
        }

        ?>

        <!-- Miku Nakano Logo & Otaku-Stream Text -->
        <div class="Icons">
                <img class="Miku_Logo" src="Img/Miku_Logo.png">
                <img class="Otaku-Stream_Logo" src="Img/Otakupédia.png">
        </div>

        <!-- Nav Menu -->
        <ul class="menu">
                <a href="Index.php"> <li>Home</li></a>

                <?php

                        if(isset($_SESSION['Logged'])){
                                if($_SESSION['Logged'] == 1){

                                        echo('

                                                <a href="Animes.php"> <li>Animes</li></a>
                                                <a href="Movies.php"> <li>Animations Movies</li></a>

                                        ');

                                }
                                else{}

                        }
                        else{}

                ?>
        </ul>

</div>