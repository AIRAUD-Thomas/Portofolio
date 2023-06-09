<?php


namespace Models;

class Database
{
    protected $bdd;
    
    //elle se connecte à la bdd
    
    public function __construct()
    {
        $this -> bdd = new \PDO('mysql:host=localhost;dbname=vaposhop;charset=utf8','root','');
    }

    protected function findAll($req,$params = [])
    {
        $query = $this -> bdd -> prepare($req);
        $query -> execute($params);
        return $query -> fetchAll(); //récupérer les enregistrements
    }


    protected function find( $table, $id )
    {
        $query = $this->bdd->prepare( "SELECT * FROM " . $table . " WHERE id = ?" );
        $query->execute( [ $id ] );
        $data = $query->fetch();
        $query->closeCursor();
        return $data;
    }

    protected function findCategory( $table, $category )
    {
        $query = $this->bdd->prepare( "SELECT * FROM " . $table . " WHERE category = ?" );
        $query->execute( [ $category ] );
        $data = $query->fetchAll();
        $query->closeCursor();
        return $data;
    }

    protected function findEmail( $table, $email )
    {
        $query = $this->bdd->prepare( "SELECT * FROM " . $table . " WHERE email = ?" );
        $query->execute( [ $email ] );
        $data = $query->fetch();
        $query->closeCursor();
        return $data;
    }

    protected function findPseudo( $table, $pseudo )
    {
        $query = $this->bdd->prepare( "SELECT * FROM " . $table . " WHERE pseudo = ?" );
        $query->execute( [ $pseudo ] );
        $data = $query->fetch();
        $query->closeCursor();
        return $data;
    }

    protected function findStock($id )
    {
        $query = $this->bdd->prepare( "SELECT stock FROM product WHERE id = ?" );
        $query->execute([$id]);
        $data = $query->fetch();
        $query->closeCursor();
        return $data;
    }

    protected function addUser( $table, $nom, $prenom, $email, $password )
    {
        $query = $this->bdd->prepare( "INSERT INTO " . $table . "(nom, prenom, email, password)  VALUES (?,?,?,?)" );
        $query->execute( [ $nom, $prenom, $email, $password ] );
        $data = $query->fetch();
    }

    protected function Update ($title, $content, $author, $id, $picture)
    {
        $query = $this->bdd->prepare( "UPDATE article SET title=?, content=?, author=?, picture=? WHERE id=? " );
        $query->execute( [ $title, $content, $author, $picture, $id ] );
    }
    

}