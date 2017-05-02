
 //
 //
 // $('#UP').click(function(){
 //     $('html, body').animate({scrollTop:0}, 'slow');
 // });

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

