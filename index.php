<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="style/style.css" />
		<title>
			Timothée Popesco - A2DW
		</title>
	</head>
	<body>
		<nav>
			<div class="profile">
				<img src="img/ppCV.jpg" alt="profile photo" />
				<h2>Timothée Popesco</h2>
			</div>
			<ul>
                <li><a href="#projets" class="button">Mes projets</a></li>
				<li><a href="#competences" class="button">Mes compétences</a></li>
                <li><a href="img/cv.png" class="button">Mon CV</a></li>

			</ul>
		</nav>

		<section class="page-content">
			<header>
				<h1>Développeur web junior à la recherche d'un stage de deux mois</h1>
				<p>
                    Actuellement étudiant en deuxième année à l'IIM dans le cursus développement web, 
                    j'ai développé des compétences de travail en équipe. Je suis attentif , adaptable et motivé. 
                    Je suis passionné par la culture japonaise, la cuisine et le sport. 
                    Mon cursus me forme à utiliser différent langages et librairies 
                    de programmation dans que je mets en pratique dans des projets hebdomadaires.
				</p>
				<a href="#foot">Je veux rentrer en contact</a>
			</header>

            <section class="presentation">
                <video class="presentation-image" controls poster="">
                    <source src="img/Rendu final.mp4" type=video/mp4>
                </video>
                <p id="projets">Vidéo réalisé avec After Effects reprenant mes projets de première année.</p>
            </section>

            

			<section class="projects-section" >
				<h2>Projets réalisés</h2>
				<div class="projects">

					<div class="project">
						<h4>Projet annuel - IIM A1</h4>
						<p class="description">
                            A la fin de ma première année, j'ai du réaliser un site sur un personnage de manga 
                            que j'ai du présenter lors de ma soutenance final.
						</p>
						<p class="goproj"><a href="projets/siteA1Deku/index.php">Le découvrir</a></p>
					</div>

					<div class="project">
						<h4>Projet semestriel - IIM A2</h4>
						<p class="description">
							Lors de mon premier semestre en deuxième année, j'ai avec une équipe réalisé pour un client (Studio Edoras) une Landing page à sa demande.  
						</p>
						<p class="goproj"><a href="projets/siteBAPS1/index.php">Le découvrir</a></p>
					</div>

					<div class="project">
						<h4>Projet Python - A1</h4>
						<p class="description">
							Lors de ma première année, j'ai fait un exercice en python (créer un rpg dans la console)
                            afin d'apprendre à me servir des boucles, des listes, des topples...
						</p>
						<p class="goproj"><a href="projets/python/A1RPG/RPGpy.txt">Le découvrir</a></p>
					</div>

					<div class="project">
						<h4>Projet Python - A2</h4>
						<p class="description">
							Lors de ma deuxième année, j'ai fait plusieurs exercices en python afin d'apprendre à me servir
                            des boucles, des listes, des topples ainsi que des fonctions...
						</p>
						<p class="goproj"><a href="projets/python/A2exos/ExosA2DW.txt">Le découvrir</a></p>
					</div>

                    <div class="project">
						<h4>Créations & Design</h4>
						<p class="description">
							A la fin de ma première année, j'ai du réaliser une parodie de l'affiche 
                            du Joker afin de montrer que je savais me servir des outils photoshop.
						</p>
						<p class="goproj"><a href="img/Affiche.joker.jpg">La découvrir</a></p>
					</div>

                    <div class="project">
						<h4>Projets annuel en cours - A2</h4>
						<p class="description">
							Dans le cadre de ma deuxième année, je suis en train de faire en groupe (5) une application multi-plateforme
                            à l'aide de React Native et Strapi.
						</p>
					</div>

					<div class="project">
						<h4>Portfolio</h4>
						<p class="description">
							Dans le cadre de mes études et afin de montrer mes compétences j'ai créer ce portfolio
                            afin de présenter mes compétences et mes projets. 
						</p>
					</div>

				</div>
			</section>
            <section class="competences-section" id="competences">
                <h2>Mes compétences</h2>
                <div class="competences">
                    <div class="mySlides fondue">
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <img class="imag" src="img/fichesCompétencesHtmlCss.png" >
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        <br><br>
            
                        <p class="text">Structure respectueuse des standards.
                            HTML : Code correctement indenté. Respect de l’utilité des balises. 
                            CSS : Mise en forme des éléments grâce au flexbox.
                            Connaissance du responsive (max width, mixin...), des transitions CSS (hover) et des variables CSS.
                            Utilisation de Sass, tailwindcss et bootstrap.
                        </p>
                    </div>
                    <div class="mySlides fondue">
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <img class="imag" src="img/fichesCompétencesJS.png" >
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        <br><br>
                        <p class="text">
                            Structure Javascript respectueuse des standards.
                            Connaissance des interactions, effets, animations pouvant être réalisé 
                            (création de formulaire, galerie d’images avec un système de lightbox
                             et de tri, interaction pour masquer/afficher du contenue comme des 
                             accordéons, des toggles, des animations permettant par exemple 
                             de faire apparaître des éléments sur une page après son chargement...)
                             Découverte des bases de NodeJs, VueJS et React. 
                        </p>
                    </div>
                    <div class="mySlides fondue">
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <img class="imag" src="img/fichesCompétencesPhpSQL.png" >
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        <br><br>
                        <p class="text">
                            Structure PHP respectueuse des standards. 
                            Maîtrise des bases de données SQL (connexion ou ajout d'éléments à une db par exemple).  
                            Création d’interfaces d’administration avec un système de login/mot de passe (hash).
                            Création de système de commentaires sécurisé.
                            Création d’un blog, l’ajout des articles peut contenir des titres, des images, des zones de texte...
                            Maîtrise de wordpress.org/.com et symfony. 
                        </p>
                    </div>
                    <div class="mySlides fondue">
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <img class="imag" src="img/fichesCompétencesPy.png" >
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        <br><br>
                        <p class="text">
                            Maîtrise du logiciel et des bases de la programmation sous Pycharm. Maîtrise des variables, des boucles
                            , des fonctions, des différents types de tris... Découverte de la bibliothèque Pygame. 
                        </p>
                    </div>
                    <div class="mySlides fondue">
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <img class="imag" src="img/fichesCompétencesCsharp.png" >
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        <br><br>
                        <p class="text">Structure C# respectueuse des standards. Maîtrise des bases du langage (fonctions, variables,...).
                        </p>
                    </div>
                    <div class="mySlides fondue">
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <img class="imag" src="img/fichesCompétencesDesign.png" >
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        <br><br>
                        <p class="text">Découverte des bases sur les outils Photoshop et InDesign. 
                            Maîtrise des logiciels Illustrator, AdobeXd, Figma et After Effects. 
                        </p>
                    </div>
                    <br><br>
                    <div class="points">
                        <span class="dot" onclick="currentSlide(1)"></span> 
                        <span class="dot" onclick="currentSlide(2)"></span> 
                        <span class="dot" onclick="currentSlide(3)"></span> 
                        <span class="dot" onclick="currentSlide(4)"></span> 
                        <span class="dot" onclick="currentSlide(5)"></span> 
                        <span class="dot" onclick="currentSlide(6)"></span> 
                    </div>
                </div>
            </section>
		</section>

		<footer id="foot">
			<div class="colonne">
				<h3>Informations supplémentaires</h3>
				<p>Baccalauréat Scientifique spé ISN</p>
				<p>Titulaire d'un permis B</p>
				<p>membre actif de l'association Léorugby</p>
			</div>
			<div class="colonne">
				<h3>Me retrouver</h3>
				<p><a href="https://github.com/TimotheePopesco">Github</a></p>
				<p><a href="https://www.linkedin.com/in/timoth%C3%A9e-popesco-2915bb207/">Linkedin</a></p>
				<p><a href="https://www.facebook.com/timothee.popesco.3/">Facebook</a></p>
			</div>
			<div class="colonne">
				<h3>Me contacter</h3>
				<p>timothee.popesco@edu.devinci.fr</p>
				<p>8 rue La Rochejaquelein 78100 St-Germain en Laye</p>
				<p>+33 6 52 88 97 33</p>
			</div>
		</footer>

        <script src="main.js"></script>
	</body>
</html>
