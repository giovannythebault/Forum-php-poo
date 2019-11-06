<?php

function debug($params) {
    global $fulldebug;
    if( $fulldebug == true) {
        echo "<pre>";
        print_r($param);
        echo "</pre>";
    }
    
}

date_default_timezone_set('Europe/Paris');

 function br() {
     return "<br><br>";
 }
?>