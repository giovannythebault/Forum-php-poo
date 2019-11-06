<?php

function chargerClasse($classe) {
    if(!defined('CLASSES_DIR')) {
        define('CLASSES_DIR'. CLASSES);
    }
    
    set_include_path(
        CLASSE_DIR. PATH_SEPARATOR . get_include_path()
    );
    require $classe . '.php';
}
spl_autoload_register('chargerClasse');
?>