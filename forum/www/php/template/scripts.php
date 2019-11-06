<?php

 $scriptLibs = array( 
     JQUERY . DS . "jquery-3.4.1.js",
     BOOTSTRAP_JS . DS . "bootstrap.js",
     BOOTSTRAP_JS . DS . "bootstrap.bundle.js",
     BOOTSTRAP_JS . DS ."bootstrap.bundle.js.map",
     BOOTSTRAP_JS . DS ."bootstrap.bundle.min.js",
     BOOTSTRAP_JS . DS ."bootstrap.bundle.min.js.map",
     BOOTSTRAP_JS . DS ."bootstrap.js.map",
     BOOTSTRAP_JS . DS ."bootstrap.min.js",
     BOOTSTRAP_JS . DS ."bootstrap.min.js.map"
     
 );

 $scriptApplis = array( 
    JS.DS. "utils.js",
    JS.DS. "modals.js",
    JS.DS. "fenetres.js",
    JS.DS. "developpement.js",
    JS.DS. "notif.js",
    JS.DS. "menu.js",
    JS.DS. "regexp.js",
    JS.DS. "validates.js",
    JS.DS. "main.js"

 );

?> 


<?php foreach( $scriptLibs as $lib) : ?>
        <script type="text/javascript" src= "<?= $lib; ?>"> </script>
<?php endforeach; ?>

<?php foreach( $scriptApplis as $app) : ?>
        <script type="text/javascript" src= "<?= $app; ?>"> </script>
<?php endforeach; ?>