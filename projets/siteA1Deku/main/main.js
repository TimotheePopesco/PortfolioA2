/*On séléctionne les éléments utilent pour faire le menu Burger :*/
var contenu = document.getElementById('contenuMenuBurger');
var sidebarBody = document.getElementById('menuBurgerSidebar-body');
var bouton = document.getElementById('boutonMenuBurger');
var overlay = document.getElementById('menuBurgerOverlay');
var activer = 'menuBurgerActive';

sidebarBody.innerHTML = contenu.innerHTML;

bouton.addEventListener('click', fonction1);
/*Je creer la fonction1 :*/
function fonction1(){
    /*Je recherche la variable activer et je l' ajoute :*/
    this.parentNode.classList.add(activer);
}


/*Quand on clique en dehors du menu Burger il se referme :*/
overlay.addEventListener('click', fonction2);
/*Je creer la fonction 2*/
function fonction2() {
    /*Je recherche la variable activer et je la retire :*/
    this.parentNode.classList.remove(activer);
}

		// Créer le mode sombre
var dark = document.getElementById('boutonsombre');
var light = document.getElementById('boutonclaire');
var themecolor = document.getElementsByTagName('body')[0];
var contactcolor = document.getElementsByTagName('form')[0];
dark.addEventListener('click', function(){
	themecolor.classList.add("theme");
    contactcolor.classList.add("theme");
})
light.addEventListener('click', function(){
	themecolor.classList.remove("theme");
    contactcolor.classList.remove("theme");
})