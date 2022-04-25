
// Je creer l'animation de la frise
$(".wrapper .single-item > span").on("mouseenter mouseover", function(f){
    $(".wrapper .single-item.active").removeClass("active");
    $(this).parent().addClass("active");
});

