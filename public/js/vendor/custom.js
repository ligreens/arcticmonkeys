

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



 $(document).ready(function(){
     $(".albumam").click(function(){
         $(".songlistam").toggle();
     });

 });


 $(document).ready(function(){
     $(".albumsuck").click(function(){
         $(".songlistsuck").toggle();
     });

 });

 $(document).ready(function(){
     $(".albumpeople").click(function(){
         $(".songlistpeople").toggle();
     });

 });

 $(document).ready(function(){
     $(".albumworst").click(function(){
         $(".songlistworst").toggle();
     });

 });

 $(document).ready(function(){
     $(".albumhumbug").click(function(){
         $(".songlisthumbug").toggle();
     });

 });