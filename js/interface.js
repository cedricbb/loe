$(document).ready(function() {
   $('#carte').click(function () {
       $('.default').css("display", "none");
       $('.monture').css("display", "none");
       $('.carte').css("display", "block");
       $('.compagnon').css("display", "none");
       $('.compagnon2').css("display", "none");
       $('#maps').attr('src', 'images/map1.jpg');
   });
    $('#monture').click(function () {
        $('.default').css("display", "none");
        $('.carte').css("display", "none");
        $('.monture').css("display", "block");
        $('.compagnon').css("display", "none");
        $('.compagnon2').css("display", "none");
    });
    $('#compagnon').click(function () {
        $('.default').css("display", "none");
        $('.carte').css("display", "none");
        $('.monture').css("display", "none");
        $('.compagnon').css("display", "block");
        $('.compagnon2').css("display", "none");
    });
    $('#compagnon1').click(function () {
        $('.default').css("display", "none");
        $('.carte').css("display", "none");
        $('.monture').css("display", "none");
        $('.compagnon').css("display", "block");
        $('.compagnon2').css("display", "none");
    });
    $('#compagnon2').click(function () {
        $('.default').css("display", "none");
        $('.carte').css("display", "none");
        $('.monture').css("display", "none");
        $('.compagnon').css("display", "none");
        $('.compagnon2').css("display", "block");
    });
    $('#compagnon3').click(function () {
        $('.default').css("display", "none");
        $('.carte').css("display", "none");
        $('.monture').css("display", "none");
        $('.compagnon').css("display", "block");
        $('.compagnon2').css("display", "none");
    });
    $('.voyage').click(function () {
        $('#maps').attr('src', 'images/0ae6849e1.png');
    })
});
