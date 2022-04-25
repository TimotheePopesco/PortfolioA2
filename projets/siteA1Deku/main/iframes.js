var but0 = document.getElementById('contenuePlus00');
var but1 = document.getElementById('contenuePlus01');
var but2 = document.getElementById('contenuePlus02');
// var videee = document.createElement("video");
var lightboxx = document.getElementById('lightbox');
var contenue = document.getElementById('lightbox_contain');
var close = document.getElementsByClassName('lightbox_close')[0];

but0.addEventListener('click', function(){
    lightboxx.style.display = 'block';       
    // videee = ;
    // contenue = videee;
});
but1.addEventListener('click', function(){
    lightboxx.style.display = 'block';       
    // videee = ;
    // contenue = videee;
});
but2.addEventListener('click', function(){
    lightboxx.style.display = 'block';       
    // videee = ;
    // contenue = videee;
});
    

close.addEventListener('click',function(){
    lightboxx.style.display = 'none';
})