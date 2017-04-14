$(document).ready(function() {
   $('#carte').click(function () {
       $('.default').css("display", "none");
       $('.monture').css("display", "none");
       $('.carte').css("display", "block");
   });
    $('#monture').click(function () {
        $('.dafault').css("display", "none");
        $('.carte').css("display", "none");
        $('.monture').css("display", "block");
    })
});
