// Lien du menu
function accueil() {

    $("#contenu").load('/php/pages/accueil.php');
    
}
function forum() {

    $("#contenu").load('/php/pages/forum.php');
    
}

function contact() {
    $("#contenu").load('/php/pages/contact.php');

}

function connect() {
    creerModal( "connect", "formulaire de connexion", "/php/membres/connect.php", "info", true)

}

