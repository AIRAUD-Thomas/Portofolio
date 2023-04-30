<?php 

namespace Controllers;

class HomeController 
{
    public function display()
    {
        $model = new \Models\Home();
      
        include_once 'views/home.phtml';
    
    }
    
    
}
