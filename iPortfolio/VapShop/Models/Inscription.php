<?php


namespace Models ;

class Inscription extends Database
{
   
    public function newUser( $nom, $prenom, $email, $password )
    {
        return $this->addUser( 'users', $nom, $prenom, $email, $password );
    }
    public function getUser( $email )
    {
        return $this->findEmail( 'users', $email );
    }

    public function getUser2( $pseudo )
    {
        return $this->findPseudo( 'users', $pseudo );
    }
}