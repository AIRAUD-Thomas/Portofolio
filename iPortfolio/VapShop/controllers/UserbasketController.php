<?php 

namespace Controllers;

class UserbasketController 
{
    public function display()
    {
        $model = new \Models\Panier();

        $errorsForm = [];
        $msgValid = [];
        
        $template = "userbasket.phtml";
        include_once 'views/layout.phtml';
    
    }
    
}