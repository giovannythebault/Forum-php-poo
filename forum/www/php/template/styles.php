<?php

    $styleLibs = array(
        BOOTSTRAP_CSS . DS . "bootstrap.css",
        BOOTSTRAP_CSS . DS . "bootstrap-grid.css",
        BOOTSTRAP_CSS . DS . "bootstrap-grid.css.map",
        BOOTSTRAP_CSS . DS . "bootstrap-reboot.css"


    );

    $styleApplis = array(
        CSS . DS . "style.css" 
    );

?> 


<?php foreach($styleLibs as $lib) : ?>

        <link rel = "stylesheet" type = "text/css" href = "<?= $lib; ?>"/>

<?php endforeach ?>

<?php foreach($styleApplis as $app) : ?>

        <link rel = "stylesheet" type = "text/css" href = "<?= $app; ?>"/>

<?php endforeach ?>