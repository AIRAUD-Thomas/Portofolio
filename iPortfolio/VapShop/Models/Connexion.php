<?php


namespace Models ;

class Connexion extends Database
{
   

    public function getUser( $email )
    {
        return $this->findEmail( 'users', $email );
    }

}