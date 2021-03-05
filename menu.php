<div class="menu_div">

        <!-- Login Button / Sign in Button / Account / Disconnect button -->
        <?php 

        if(isset($_SESSION['Logged'])){
                if($_SESSION['Logged'] == 1){

                        echo('

                                <div class="User_Account"><a href="Account.php">
                                        <table onmouseover="this.style.backgroundColor=\'white\'; this.style.color=\'black\'; " onmouseout="this.style.backgroundColor=\'black\'; this.style.color=\'white\';">
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

        <!-- Miku Nakano Logo & Otakupédia Text -->
        <div class="Icons">
                <img class="Miku_Logo" src="Img/Miku_Logo.png">
                <img src="Img/Otakupédia.png">
        </div>

        <!-- Nav Menu -->
        <ul class="menu">
                <a href="Index.php"> <li onmouseover="this.style.backgroundColor='white'; this.style.color='black'; " onmouseout="this.style.backgroundColor='black'; this.style.color='white';">Home</li></a>

                <?php

                        if(isset($_SESSION['Logged'])){
                                if($_SESSION['Logged'] == 1){

                                        echo("

                                                <a href=\"Animes.php\"> <li onmouseover=\"this.style.backgroundColor='white'; this.style.color='black'; \" onmouseout=\"this.style.backgroundColor='black'; this.style.color='white';\">Animes</li></a>
                                                <a href=\"Movies.php\"> <li onmouseover=\"this.style.backgroundColor='white'; this.style.color='black'; \" onmouseout=\"this.style.backgroundColor='black'; this.style.color='white';\">Animations Movies</li></a>

                                        ");

                                }
                                else{}

                        }
                        else{}

                ?>
        </ul>

</div>