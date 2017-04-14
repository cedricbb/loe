$(document).ready(function() {
   $('#carte').click(function () {
       $('.interface').css("display", "none");
       $('.monture').css("display", "none");
       $('.carte').css("display", "block");
   });
    $('#monture').click(function () {
        $('.interface').css("display", "none");
        $('.carte').css("display", "none");
        $('.monture').css("display", "block");
    })
});
