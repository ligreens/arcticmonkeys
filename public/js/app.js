$("body").on("load", function(){
    console.log("Body loaded");
});

$(document).ready(function(){
    $(".second:nth-child(even)").css("background-color", "#333333");
});
