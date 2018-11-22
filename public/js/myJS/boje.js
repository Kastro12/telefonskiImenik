$(document).ready(function () {

$('#boja').click(function () {

    $('.prikazBoja').toggle('slow');


    $('#plava').click(function () {
       $('#app').css('background-color','#3e84ff');
        $('#se .search-div input').css('background-color','#3e84ff');
    });
    $('#crvena').click(function () {
        $('#app').css('background-color','#ff2610');
        $('#se .search-div input').css('background-color','#ff2610');
    });
    $('#narandzasta').click(function () {
        $('#app').css('background-color','#ffa70b');
        $('#se .search-div input').css('background-color','#ffa70b');
    });
    $('#zelena').click(function () {
        $('#app').css('background-color','#29ff94');
        $('#se .search-div input').css('background-color','#29ff94');
    });
    $('#bela').click(function () {
        $('#app').css('background-color','#fff');
        $('#se .search-div input').css('background-color','#fff');
    });


});

});