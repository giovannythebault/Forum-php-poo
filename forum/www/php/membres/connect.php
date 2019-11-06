<?php

require_once("../../init.php");

try {
    $bdd = new PDO(DSN, USER, PASS);
    
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>