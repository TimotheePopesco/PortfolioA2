<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PAGE CONTACT</title>
        <link rel="stylesheet" type="text/css" href="style/style.css">
    </head>
    <body>
        <header>
        <?php
        require "view/clairsombre.php";
        ?>  
            <!-- <a href="#" id="logo"></a> -->
            <!-- div menu Burger :-->
            <div id ="menuBurger">
                <div id="contenuMenuBurger">
                    <!-- création de la barre de navigation :-->
                    <nav>
                        <ul>
                            <li><a href="index.php"><p class="menu1">ACCUEIL</p></a></li>
                            <li><a href="galeries.php"><p class="menu2">GALERIES PHOTOS</p></a></li>
                            <li><a href="histoire.php"><p class="menu3">HISTOIRE</p></a></li>
                            <li><a href="blog.php"><p class="menu4">Blog</p></a></li>
                            <!-- <li><a href="#" class="boutonInscrire">S'inscrire</a></li>
                            <li><a href="#" class="boutonConnecter">Se connecter</a></li>  -->
                        </ul>
                    </nav>
                </div>
                <?php
                require "view/burger.php";
                ?> 
            </div>	
        </header>

		<?php
            require "view/titre.php";
        ?>  

        <section class="sec2">

            <form class="contact">
                <div>
                    <label for="name">Nom :</label>
                    <input type="text" id="name" name="user_name">
                </div>
                <div>
                    <label for="mail">E-mail :</label>
                    <input type="email" id="mail" name="user_mail">
                </div>
                <div>
                    <label for="msg">Message :</label>
                    <textarea id="msg" name="user_message"></textarea>
                </div>

                <div class="buttonCtc">
                    <input type="submit" value="Envoyer le message" >
                </div>
            </form>

        </section>


        <section class="sec3">
            <div class="prevention">
                <p>NE SPAMMER PAS VOTRE HEROS PREFERE !<br>MERCI</p>
            </div>

        </section>

        <?php
            require "view/footer.php";
        ?>     

        <script src="main/main.js"></script>

        
    </body>
</html>