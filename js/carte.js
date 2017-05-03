$(document).ready(function() {
    $('#carte').click(function () {
        $('.default').css("display", "none");
        $('.monture').css("display", "none");
        $('.carte').css("display", "block");
        $('.compagnon').css("display", "none");
        $('.compagnon2').css("display", "none");
        $('#maps').attr('src', 'images/carte/map1.jpg');
        $('.joueur').css("display", "none");          
    });
});