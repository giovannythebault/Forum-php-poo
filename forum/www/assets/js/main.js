
var fulldebug = true;

$(document).ready(function(evt) {

    //fonction du menu

    $("#forum").on('click', function(e) { e.preventDefault(); forum(); });
    $("#contact").on('click', function(e) { e.preventDefault(); contact(); });
    $("#connexion").on('click', function(e) { e.preventDefault(); connect(); });
    
    accueil();

});