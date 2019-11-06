<?php

//constante de configuration des informations à mysql

define("HOST", "localhosts");
define("USER", "unixvers");
define("PASS", "zzO90L9rncKiKVnv");
define("BASE", "forum");
define("DSN", "mysql:host=". HOST .";dbname=" . BASE );
define("PREFIX", "forunix_"); 

//constante des tables
define("T_UTILISATEURS", PREFIX . "utilisateurs");
define("T_GROUPES", PREFIX . "groupes");
define("T_FORUMS", PREFIX . "forums");
define("T_ERREURS", PREFIX . "erreurs");





?>