<!DOCTYPE html>
<html>

	<head>
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<title>Blog</title>
		<meta charset="utf-8">
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
                            <li><a href="index.php"><p class="menue1">Accueil</p></a></li>
							<li><a href="histoire.php"><p class="menu2">HISTOIRE</p></a></li>
							<li><a href="galeries.php"><p class="menu3">GALERIES PHOTOS</p></a></li>
							<li><a href="contact.php"><p class="menu4">PAGE CONTACT</p></a></li>

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
                    <!-- Création de la lightbox : -->
            <div id="lightbox">
                <button class="lightbox_close">&#10008;</button>
                <!-- <button class="lightbox_prev">&#10094;</button>
                <button class="lightbox_next">&#10095;</button> -->
                
                <div id="lightbox_contain">

                </div>
            </div>

            <?php
            require "view/titre.php";
            ?>   



            <!-- Je créer le premiere article de blog -->
            <section class="se002">
                <div class = "imgarticle">
                    <img src="style/img/Jimenez-MHA.jpg" title="JORGE JIMENEZ SIGNE UNE COUVERTURE POUR MY HERO ACADEMIA T30 CHEZ KI-OON">
                    <br>
                    <button id="contenuePlus00">Voir plus de contenue <br> &#10095;</button>
                    <br>
                    <?php echo
                    "<form class='commentForm' method='post'>
                        <p>Qu'en pensez vous ?</p>
                        <input class='pse' type='text' name='pseudo1' placeholder='Pseudo'>
                        
                        <textarea class='msg' name='message1' placeholder='Commentaire'></textarea>
                        
                        <input class='poster' type='submit' value='Send Post' >
                    </form>"
                    ?>
                </div>
                
                <div class="txtarticle">
                    <h2>X-MEN EN MANGA</h2>
                    <p>Il est tout à fait naturel que les artistes officiant dans l'industrie mainstream du comics s'essayent au dessin sur My Hero Academia, 
                        un titre qui nous emmène littéralement dans une école où l'on apprend à devenir super-héros. 
                        L'artiste Jorge Jimenez, très connu du lectorat français pour ses travaux sur Super Sons, 
                        Justice League et dernièrement le Batman de James Tynion IV, signera donc une couverture pour MHA Tome 30, révélée aujourd'hui par Ki-Oon.
                        La couverture représente avec le style hyper dynamique de Jimenez (dont on ressent en général un côté "animation/manga") 
                        les deux héros que sont Mirio Togata et Izuku Midoriya (le personnage principal du manga). La couverture variante sera proposée dans un coffret collector,
                         dont le contenu précis doit être dévoilé d'ici quelques jours par Ki-Oon. La sortie est annoncée pour le 2 septembre prochain - 
                         d'ici là, on vous laissera simplement en prendre plein les mirettes.</p>
                    <br>

                    <?php
                    // connexion a la base de donnée 
                    $pdo = new PDO ('mysql:host=localhost;dbname=timpodev.tk', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
                    // Je verifie :
                    // var_dump($pdo);

                    // Si validation du formulaire :
                    if($_POST) {
                        // echo $_POST['pseudo'] . '<br>' . $_POST['message'];

                        // Je gere les apostrophe pour ne que la chaine de caractere ne se referme pas:
                        $_POST['pseudo1'] = addslashes($_POST['pseudo1']);
                        $_POST['message1'] = addslashes($_POST['message1']);
                        // J'envoie les infos du formulaire dans la base :
                        $pdo->exec("INSERT INTO article1 (pseudo1, message1, date_heure_msg1) VALUES ('$_POST[pseudo1]', '$_POST[message1]', NOW())");
                    }


                    // On affiche tout les commentaires dans la table :

                    $r = $pdo->query('SELECT * FROM article1 ORDER by id DESC');
                    echo '<div class="retourcmt1">';
                    while($post = $r->fetch(PDO::FETCH_ASSOC)) {
                        echo $post['pseudo1'] . ' : ' . $post['message1'] . '   ' . '<button class="close">&#10008;</button>' . '<br>';
                    }
                    echo '</div>';


                    // Supprimer un élément de la base :
                    $pdo->exec('DELETE FROM employes WHERE id_employes = 991');

                    ?>
                </div>
            </section>
            <br>
            <hr>
            <br>

            <!-- Je créer le second article de blog -->
            <section class="se002">
                
                <div class = "imgarticle">
                    <img src="style/img/film3.jpg" title="My Hero Academia: le troisième film arrive !">
                    <br>
                    <button id="contenuePlus01">Voir plus de contenue <br> &#10095;</button>
                    <br>
                    <?php echo
                    "<form class='commentForm' method='post'>
                        <p>Qu'en pensez vous ?</p>
                        <input class='pse' type='text' name='pseudo2' placeholder='Pseudo'>
                        
                        <textarea class='msg' name='message2' placeholder='Commentaire'></textarea>
                        
                        <input class='poster' type='submit' value='Send Post' >
                    </form>"
                    ?>
                    
                </div>
                
                <div class="txtarticle">
                    <h2>« My Hero Academia » sera le troisième film d’action des trois personnages les plus importants des États-Unis.</h2>
                    <p>L’annonce a été faite de manière familière grâce à une affiche.
                         « My Hero Academia » a d’abord soulevé des questions sur un film la semaine dernière
                          lorsqu’il a publié trois affiches de personnages qui ont été combinées
                           en une seule promotion avec Izuko, Bakugo et Todoroki.
                        Cette affiche a été imprimée dans le dernier numéro du Weekly Shonen Jump, mais un nouveau texte a été ajouté.
                         L’information annonçait que « My Hero Academia » reviendrait sur les écrans de cinéma à l’été 2021.
                        À ce stade, il n’y a pas de date de sortie fixe, mais cette fenêtre est très logique. Il suit le même calendrier
                         que celui du premier film « My Hero Academia ».
                        « My Hero Academia : Two Heroes » est sorti en été après le début de son anime au printemps. 
                        La cinquième saison étant diffusée au printemps 2021, il est logique que ce troisième épisode
                         soit diffusé à la fin de l’été.</p>
                    <br>

                    <?php
                    // connexion a la base de donnée 
                    $pdo = new PDO ('mysql:host=localhost;dbname=timpodev.tk', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
                    // Je verifie :
                    // var_dump($pdo);

                    // Si validation du formulaire :
                    if($_POST) {
                        // echo $_POST['pseudo'] . '<br>' . $_POST['message'];

                        // Je gere les apostrophe pour ne que la chaine de caractere ne se referme pas:
                        $_POST['pseudo2'] = addslashes($_POST['pseudo2']);
                        $_POST['message2'] = addslashes($_POST['message2']);
                        // J'envoie les infos du formulaire dans la base :
                        $pdo->exec("INSERT INTO article2 (pseudo2, message2, date_heure_msg2) VALUES ('$_POST[pseudo2]', '$_POST[message2]', NOW())");
                    }


                    // On affiche tout les commentaires dans la table :

                    $r = $pdo->query('SELECT * FROM article2 ORDER by id DESC');
                    echo '<div class="retourcmt2">';
                    while($post = $r->fetch(PDO::FETCH_ASSOC)) {
                        echo $post['pseudo2'] . ' : ' . $post['message2'] . '<br>';
                    }
                    echo '</div>';
                    ?>
                    
                </div>
            </section>
            <br>
            <hr>
            <br>



            <!-- Je créer le dernier article de blog -->
            <section class="se002">
                <div class = "imgarticle">
                    <img src="style/img/jeux.jpg" title="la couverture du jeu 'The Strongest Hero'">
                    <br>
                    <button id="contenuePlus02">Voir plus de contenue <br> &#10095;</button>
                    <br>
                    <?php echo
                    "<form class='commentForm' method='post'>
                        <p>Qu'en pensez vous ?</p>
                        <input class='pse' type='text' name='pseudo2' placeholder='Pseudo'>
                        
                        <textarea class='msg' name='message2' placeholder='Commentaire'></textarea>
                        
                        <input class='poster' type='submit' value='Send Post' >
                    </form>"
                    ?>
                    
                </div>
                
                <div class="txtarticle">
                    <h2>My Hero Academia: The Strongest Hero débarque prochainement en Europe sur iOS et Android</h2>
                    <p>La licence My Hero Academia est très populaire dans le monde, et forcément,
                         elle a déjà eu droit à quelques adaptations en jeux, notamment avec la série des My Hero
                          One’s Justice. Il fallait s’y attendre, le marché du mobile s’est aussi emparé 
                          de la licence et l’un des titres déjà sorti au Japon s’apprête à faire son entrée 
                          en Europe, à savoir My Hero Academia: The Strongest Hero.
                          My Hero Academia: The Strongest Hero est un Action-RPG sur iOS et Android 
                          dans lequel il est possible de contrôler librement Deku, Bakugo et les autres héros 
                          dans des décors en 3D, afin d’effectuer plusieurs missions avec des combats
                           en temps réel où les Alters des protagonistes pourront être déchaînés.</p>
                    <br>

                    
                    <?php
                    // connexion a la base de donnée 
                    $pdo = new PDO ('mysql:host=localhost;dbname=timpodev.tk', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
                    // Je verifie :
                    // var_dump($pdo);

                    // Si validation du formulaire :
                    if($_POST) {
                        // echo $_POST['pseudo'] . '<br>' . $_POST['message'];

                        // Je gere les apostrophe pour ne que la chaine de caractere ne se referme pas:
                        $_POST['pseudo3'] = addslashes($_POST['pseudo3']);
                        $_POST['message3'] = addslashes($_POST['message3']);
                        // J'envoie les infos du formulaire dans la base :
                        $pdo->exec("INSERT INTO article3 (pseudo3, message3, date_heure_msg3) VALUES ('$_POST[pseudo3]', '$_POST[message3]', NOW())");
                    }


                    // On affiche tout les commentaires dans la table :

                    $r = $pdo->query('SELECT * FROM article3 ORDER by id DESC');
                    echo '<div class="retourcmt3">';
                    while($post = $r->fetch(PDO::FETCH_ASSOC)) {
                        echo $post['pseudo3'] . ' : ' . $post['message3'] . '<br>';
                    }
                    echo '</div>';
                    ?>
                    </div>

                    
                </div>
            </section>


            <?php
            require "view/footer.php";
            ?>           

		</header>
        <script src="main/main.js"></script>
        <script src="main/iframes.js"></script>
    </body>
</html>
