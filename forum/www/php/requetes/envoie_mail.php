<?php
    
    require_once("../../init.php");

	if( !empty($_POST['mail']) ){
	    if( !empty($_POST['objet']) ){
            if( !empty($_POST['demande']) ){
                
                $mail = $_POST['mail'];
                $objet = $_POST['objet'];
                $demande = $_POST['demande'];
                $votreEmail = "mon@adresse.mail";
                mail($votreEmail, $objet, $demande, null,$mail);
                
                echo "Mail envoyer";
        
            }
        }
	}

?>