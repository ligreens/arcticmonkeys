

 $(".albums").click(function() {
     $('html, body').animate({
         scrollTop: $("#albums").offset().top
     }, 1000);
 });

 $(".fansforum").click(function() {
    $('html, body').animate({
        scrollTop: $("#fans").offset().top
    }, 1000);
});

 $(".concertmenu").click(function() {
     $('html, body').animate({
         scrollTop: $("#concertclick").offset().top
     }, 1000);
 });