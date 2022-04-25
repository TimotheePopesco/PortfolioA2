<!DOCTYPE html>
<html>

	<head>

		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<title>GALERIE D'IMAGE</title>


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
							<li><a href="histoire.php"><p class="menu2">HISTOIRE</p></a></li>
							<li><a href="contact.php"><p class="menu3">PAGE CONTACT</p></a></li>
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


        <section class="galerie-images">

            <div id="boutontri">
				<button id="bouton1">Enfant</button>
				<button id="bouton2">Collégien</button>
                <button id="bouton3">Lycéen</button>
				<button id="bouton4">Pouvoir</button>
                <button id="bouton5">Amis</button>
				<button id="bouton6">Toutes</button>
			</div>


            <div class="clear"></div>

            <div id="i1">
                <img class="img0" src="style/img/img0.jpg" title="Izuku enfant regardant All Might">
                <img class="img1" src="style/img/img1.jpg" title="Izuku enfant demandant à sa mère s'il peut devenir un Héros">
                <img class="img2" src="style/img/img2.jpg" title="Izuku enfant maltraiter par Katchan ">
                <img class="img3" src="style/img/img3.jpg" title="Izuku au collège">
            </div>

			<div class="clear"></div>

            <div id="i2">
			    <img class="img4" src="style/img/img4.png" title="Izuku prenant des notes pour devenir Héros">
			    <img class="img5" src="style/img/img5.jpg" title="Izuku se renforçant physiquement pour recevoir le OneForAll">
			    <img class="img6" src="style/img/img6.jpg" title="Izuku à la fin de son entraînement physique">
			    <img class="img7" src="style/img/img7.png" title="Izuku en tenue de lycéen à Yuei">
            </div>

			<div class="clear"></div>

            <div id="i3">
                <img class="img8" src="style/img/img8.png" title="Izuku dans son costume Alpha">
                <img class="img9" src="style/img/img9.jpg" title="Izuku dans son costume Beta">
                <img class="img10" src="style/img/img10.jpg" title="Izuku portant les couleurs de Yuei (tenue de sport)">
                <img class="img11" src="style/img/img11.png" title="Izuku en tenue de soirée">
            </div>

			<div class="clear"></div>

            <div id="i4">
                <img class="img12" src="style/img/img12.jpg" title="Izuku maîtrisant son pouvoir à 5%">
                <img class="img13" src="style/img/img13.jpg" title="Izuku maîtrisant son pouvoir à 20%">
                <img class="img14" src="style/img/img14.jpg" title="Izuku utilisant son pouvoir à 100%">
                <img class="img15" src="style/img/img15.png" title="Izuku utilisant le Delaware Smash à 1millions %">
            </div>

			<div class="clear"></div>

        	<div id="i5">
                <img class="img16" src="style/img/imgoverflow.jpg" title="Izuku avec les personnes qui lui sont chère">
                <img class="img17" src="style/img/fond-accueil.jpg" title="Izuku avec la seconde A">
                <img class="img18" src="style/img/image.menu.burger.jpg" title="Izuku avec les amis de son mentor">
                <img class="img19" src="style/img/img16.jpg" title="Izuku avec ses amis de la seconde A">
            </div>
            
			<div class="clear"></div>

        </section>




		<!-- Création de la lightbox : -->
		<div id="lightbox">
			<button class="lightbox_close">&#10008;</button>
			<!-- <button class="lightbox_prev">&#10094;</button>
			<button class="lightbox_next">&#10095;</button> -->
			
			<div id="lightbox_contain">

			</div>
		</div>




		<?php
            require "view/footer.php";
        ?>     



        <script src="main/main.js"></script>
        <script src="main/galeries.js"></script>
			







	</body>
</html>