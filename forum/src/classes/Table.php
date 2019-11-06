<?php

class Table {

    private $table;
    private $id;
    private $row;
    private $bdd;


    public function __construct($table, $id = -1, $id_field = 'id' ) {
            $this->table = $table;
            $this->id = -1;
            $this->bdd = Mysql::Connect();


            if(is_numeric($id) && $id != -1) {
                $sql = "SELECT * FROM " . $table . "WHERE" . $id_field . "=" . $id;
                $req = $this->bdd->query($sql);
                $this->row = $req->fetch();

                if($this->row) {
                    $this->id = $this->row($id_field);
                }
            }
    }

    public function getId() {
        return $this->id;
    }
    


    public function exits() {
        return ! $this->notExists();
    }

    public function notExits() {

        return $this->id == -1;
    }
    // commit gére l'insert et l'update
    public function commit() {

    }

    public function delete() {

    }
}
?>