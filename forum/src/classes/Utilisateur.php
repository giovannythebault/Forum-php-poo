<?php


class Utilisateur extends Table{

    //propriété
    private $prenom;
    private $nom;
    private $mail;
    private $login;
    private $avatar;
    private $pass;
    private $token;
    private $active;
    private $groupe;


    //constructeur
    public function __construct($id) {
            parent::__construct(T_UTILISATEUR, $id);
            if($this->row) {
                $this->nom = $this->row["nom"];
                $this->prenom = $this->row["prenom"];
                $this->mail = $this->row["mail"];
                $this->login = $this->row["login"];
                $this->pass = $this->row["pass"];
                $this->token = $this->row["token"];
                $this->avatar = $this->row["avatar"];
                $this->active = $this->row["active"];
                $this->groupe = $this->row["groupe_id"];
            }
    }

    //getter
    public function getPrenom() {
        return $this->prenom;
  }public function getMail() {
    return $this->mail;
}public function getLogin() {
    return $this->login;
}public function getAvatar() {
    return $this->avatar;
}public function getPass() {
    return $this->pass;
}public function getToken() {
    return $this->token;
}public function getActive() {
    return $this->active;
}public function getGroupe() {
    return new Groupe($this->groupe);
}

    public function getNom() {
          return $this->nom;

    }

    //setter
    public function setNom($nom) {
        $this->nom = $nom;
    }
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }public function setMail($mail) {
        $this->mail = $mail;
    }public function setLogin($login) {
        $this->login = $login;
    }public function setAvatar($avatar) {
        $this->avatar = $avatar;
    }public function setPass($pass) {
        $this->pass = $pass;
    }public function setToken($token) {
        $this->token = $token;
    }public function setActive($active) {
        $this->active = $active;
    }public function setGroupe($groupe) {
        $this->groupe = $groupe;
    }

    //méthode


    public static function getAllUsers() {
        $all = null;
        $sql = "SELECT * FROM" . T_UTILISATEURS . "ORDER BY id";
        Mysql::Connect();
        $req = Mysql::query($sql);

        while( $row = $req->fetch() ) {
            $all[] = new Utilisateur($row['id']);
            
        }
        return $all;
    }


     //commit()

     public function commit() {
        if($this->notExists()) {
            //insert
            $sql = "INSERT INTO ". T_UTILISATEURS . "(nom, prenom, mail, login, pass, avatar, groupe_id, token, active) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $req = Mysql::query($sql, $this->nom, $this->prenom, $this->mail, $this->login, $this->pass, $this->avatar, $this->groupe, $this->token, $this->active);
            $this->id = $this->bdd->lastInsertId();
        } else{
            //update
            $sql = "UPDATE ". T_UTILISATEURS . "SET nom = ?, prenom = ?, mail = ?, login = ?, pass = ?, avatar = ?, groupe_id = ?, token = ?, active = ?, WHERE id = ?";
            $req = Mysql::query($sql, $this->nom, $this->prenom, $this->mail, $this->login, $this->pass, $this->avatar, $this->groupe, $this->token, $this->active);
        }
    }

    public function delete() {
        if($this->Exists()) {
            //delete
            $sql = "DELETE FROM ". T_UTILISATEURS . "WHERE id = ?";
            $req = Mysql::query($sql, $this->id);
        } 
    }
}