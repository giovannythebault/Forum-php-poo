<?php


class Groupe extends Table{

    private $nom;
    private $niveau;

    public function __construct($id) {
        parent::__construct(T_GROUPES, $id);
            if($this->row) {
                $this->nom = $this->row["nom"];
                $this->niveau = $this->row["niveau"];
     
            }

    }

    public function getNom() {
        return $this->nom;

    }

    public function getNiveau() {
        return $this->niveau;
    }


    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setNiveau($niveau) {
        $this->niveau = $niveau;
    }

    
    public static function getAllGroupes() {
        $all = null;
        $sql = "SELECT * FROM" . T_GROUPES . "ORDER BY id";
        Mysql::Connect();
        $req = Mysql::query($sql);

        while( $row = $req->fetch() ) {
            $all[] = new Groupe($row['id']);
            
        }
        return $all;
    }

     //commit()

     public function commit() {
        if($this->notExists()) {
            //insert
            $sql = "INSERT INTO ". T_GROUPES . "(nom, niveau) VALUES(?, ?)";
            $req = Mysql::query($sql, $this->nom, $this->niveau);
            $this->id = $this->bdd->lastInsertId();
        } else{
            //update
            $sql = "UPDATE ". T_GROUPES . "SET nom = ?, niveau = ?, WHERE id = ?";
            $req = Mysql::query($sql, $this->nom, $this->niveau);
        }
    }

    public function delete() {
        if($this->Exists()) {
            //delete
            $sql = "DELETE FROM ". T_GROUPES . "WHERE id = ?";
            $req = Mysql::query($sql, $this->id);
        } 
    }
}