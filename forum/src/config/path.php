<?php

define("DS", "/");
define("SRC", substr($_SERVER['DOCUMENT_ROOT'], 0, -3)  . 'src' . DS );

//niveau config
define("CONFIG", SRC. "config". DS );

//niveau classes
define("CLASSES", SRC. "classes". DS);

//niveau assets
define("ASSETS", "assets". DS);
define("JS", ASSETS. "js");
define("CSS", ASSETS. "css");
define("IMG", ASSETS. "img");

//niveau librairies libs
define("LIBS", "libs". DS);
define("BOOTSTRAP", LIBS. "bootstrap". DS);
define("BOOTSTRAP_CSS", BOOTSTRAP. "css" );
define("BOOTSTRAP_JS", BOOTSTRAP. "js");
define("JQUERY", LIBS. "jquery");
define("GRITTER_JS", LIBS. "gritter_js");
define("GRITTER_CSS", LIBS. "gritter_css");

//niveau php
define("PHP", "php". DS);
define("DEV", PHP ."developpement");
define("FORMS", PHP. "formulaires");
define("PAGES", PHP. "pages");
define("REQUETES", PHP. "requetes");
define("TEMPLATES", PHP. "template");
define("MEMBRES", PHP. "membres");

//constante globaales des url

define("ROOT", "/");
define("URL", "http://" . $_SERVER['SERVER_NAME'] . "/");
define("URLS","https://" . $_SERVER['SERVER_NAME'] . "/");




?>