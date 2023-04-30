<?php 

namespace Controllers;

class VapoteuseController 
{
    public function display()
    {
        $model = new \Models\Produits();

        $produits = $model -> finProducts('vapoteuse');
     
        $template = "vapoteuse.phtml";
        include_once 'views/layout.phtml';
    
    }
    
}