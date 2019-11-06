<?php


class Forum extends Table{

    private $nom;
    private $position;


    public function __construct($id) {
        parent::__construct(T_FORUM, $id);
        if($this->row) {
            $this->nom = $this->row["nom"];
            $this->position = $this->row["position"];
 
        }

    }

    public function getNom() {
        return $this->nom;
    }

    public function getPosition() {
        return $this->position;

    }

    public function setNom($nom) {
        $this->nom = $nom;

    }

    public function setPosition($position) {
        $this->position = $position;
    }

    
    public static function getAllForum() {
        $all = null;
        $sql = "SELECT * FROM" . T_FORUMS . "ORDER BY id";
        Mysql::Connect();
        $req = Mysql::query($sql);

        while( $row = $req->fetch() ) {
            $all[] = new Forum($row['id']);
            
        }
        return $all;
    }

    //commit()

    public function commit() {
        if($this->notExists()) {
            //insert
            $sql = "INSERT INTO ". T_FORUM . "(nom, position) VALUES(?, ?)";
            $req = Mysql::query($sql, $this->nom, $this->position);
            $this->id = $this->bdd->lastInsertId();
        } else{
            //update
            $sql = "UPDATE ". T_FORUM . "SET nom = ?, position = ?, WHERE id = ?";
            $req = Mysql::query($sql, $this->nom, $this->position);
        }
    }

    public function delete() {
        if($this->Exists()) {
            //insert
            $sql = "DELETE FROM ". T_FORUM . "WHERE id = ?";
            $req = Mysql::query($sql, $this->id);
        } 
    }

}