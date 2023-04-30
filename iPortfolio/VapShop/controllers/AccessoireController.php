<?php 

namespace Controllers;

class AccessoireController 
{
    public function display()
    {
        $model = new \Models\Produits();

        $produits = $model -> finProducts('accessoire');
     
        $template = "accessoire.phtml";
        include_once 'views/layout.phtml';
    
    }
    
}