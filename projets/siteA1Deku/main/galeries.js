// Animations de la lightbox

var lightboxx = document.getElementById('lightbox');
var contenue = document.getElementById('lightbox_contain');
var close = document.getElementsByClassName('lightbox_close')[0];
// var prev = document.getElementsByClassName('lightbox_prev')[0];
// var next = document.getElementsByClassName('lightbox_next')[0];
const imageees = document.querySelectorAll('img[title]');
var imgg = document.createElement("img");




imageees.forEach(function(imageee){
    imageee.addEventListener('click', function(){
        // console.log(imageee);
        lightboxx.style.display = 'block';       
        imgg.src = imageee.src;
        contenue.appendChild(imgg);
    });
    
});

close.addEventListener('click',function(){
    lightboxx.style.display = 'none';
})

// next.addEventListener('click',function(){
    
// })

// prev.addEventListener('click',function(){
// })














// Animations du tri de la galerie

var penfant = document.getElementById('bouton1');
var pcollegien = document.getElementById('bouton2');
var plyceen = document.getElementById('bouton3');
var ppouvoir = document.getElementById('bouton4');
var pamis = document.getElementById('bouton5');
var ptoutes = document.getElementById('bouton6');

var enfant = document.getElementById('i1');
var collegien = document.getElementById('i2');
var lyceen = document.getElementById('i3');
var pouvoir = document.getElementById('i4');
var amis = document.getElementById('i5');


pcollegien.addEventListener('click', function(b){
    if (getComputedStyle(enfant).display != 'none'){
        enfant.style.display = "none";
    }
    if (getComputedStyle(collegien).display != 'block'){
        collegien.style.display = "block";
    }
    if (getComputedStyle(lyceen).display != 'none'){
        lyceen.style.display = "none";
    }
    if (getComputedStyle(pouvoir).display != 'none'){
        pouvoir.style.display = "none";
    }
    if (getComputedStyle(amis).display != 'none'){
        amis.style.display = "none";
    }
});
penfant.addEventListener('click', function(a){
    if (getComputedStyle(enfant).display != 'block'){
        enfant.style.display = "block";
    }
    if (getComputedStyle(collegien).display != 'none'){
        collegien.style.display = "none";
    }
    if (getComputedStyle(lyceen).display != 'none'){
        lyceen.style.display = "none";
    }
    if (getComputedStyle(pouvoir).display != 'none'){
        pouvoir.style.display = "none";
    }
    if (getComputedStyle(amis).display != 'none'){
        amis.style.display = "none";
    }
});

plyceen.addEventListener('click', function(){
    if (getComputedStyle(enfant).display != 'none'){
        enfant.style.display = "none";
    }
    if (getComputedStyle(collegien).display != 'none'){
        collegien.style.display = "none";
    }
    if (getComputedStyle(lyceen).display != 'block'){
        lyceen.style.display = "block";
    }
    if (getComputedStyle(pouvoir).display != 'none'){
        pouvoir.style.display = "none";
    }
    if (getComputedStyle(amis).display != 'none'){
        amis.style.display = "none";
    }
});
ppouvoir.addEventListener('click', function(){
    if (getComputedStyle(enfant).display != 'none'){
        enfant.style.display = "none";
    }
    if (getComputedStyle(collegien).display != 'none'){
        collegien.style.display = "none";
    }
    if (getComputedStyle(lyceen).display != 'none'){
        lyceen.style.display = "none";
    }
    if (getComputedStyle(pouvoir).display != 'block'){
        pouvoir.style.display = "block";
    }
    if (getComputedStyle(amis).display != 'none'){
        amis.style.display = "none";
    }
});
pamis.addEventListener('click', function(){
    if (getComputedStyle(enfant).display != 'none'){
        enfant.style.display = "none";
    }
    if (getComputedStyle(collegien).display != 'none'){
        collegien.style.display = "none";
    }
    if (getComputedStyle(lyceen).display != 'none'){
        lyceen.style.display = "none";
    }
    if (getComputedStyle(pouvoir).display != 'none'){
        pouvoir.style.display = "none";
    }
    if (getComputedStyle(amis).display != 'block'){
        amis.style.display = "block";
    }
});
ptoutes.addEventListener('click', function(){
    if (getComputedStyle(enfant).display != 'block'){
        enfant.style.display = "block";
    }
    if (getComputedStyle(collegien).display != 'block'){
        collegien.style.display = "block";
    }
    if (getComputedStyle(lyceen).display != 'block'){
        lyceen.style.display = "block";
    }
    if (getComputedStyle(pouvoir).display != 'block'){
        pouvoir.style.display = "block";
    }
    if (getComputedStyle(amis).display != 'block'){
        amis.style.display = "block";
    }
});