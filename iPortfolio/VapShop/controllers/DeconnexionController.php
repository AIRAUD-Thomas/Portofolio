<?php

namespace Controllers;

class DeconnexionController
{
    public function display()
    {
        //contenir tout le code de traitement et de génération de la page

        //récupérer les données dont j'ai besoin
        $errorsForm = [];
        $_SESSION = array();
        /* session_destroy(); */

        $errorsForm[] = 'Vous avez été déconnecté ! ';

        
        $template = "deconnexion.phtml";
        include_once 'views/layout.phtml';
    }
}
