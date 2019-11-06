<?php

class Mysql {

    private static $bdd;

    //constructeur pattern singleton
    private function __construct($options = null) {
            try{
                self::$bdd = new PDO(DSN, USER, PASS, array( PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES \'UTF8\'"));
                self::$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_ERRMODE_EXCEPTION);
            }catch (PDOexception $e){
                 echo "erreur" . $e->getMessage();
            }
    }

    public static function Connect($options = null) {

            if(!self::$bdd) {
                try{
                        new self(DSN, USER, PASS, array( PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES \'UTF8\'"));
                    
                }catch (PDOexception $e) {
                    echo "erreur" . $e->getMessage();
                }
            }
            return self::$bdd;
    }

    public static function query($sql) {
        $args = func_get_args();
        array_shift($args);

        try{
            $req = self::$bdd->prepare($sql);
            $req->execute($args);
        }catch (PDOexception $e){
            echo "erreur" . $e->getMessage();

        }
    }

}
?> 