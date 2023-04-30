<?php 

namespace Controllers;

class EliquideController 
{
    public function display()
    {
        $model = new \Models\Produits();

        $produits = $model -> finProducts('eliquide');
     
        $template = "eliquide.phtml";
        include_once 'views/layout.phtml';
    
    }
    
}