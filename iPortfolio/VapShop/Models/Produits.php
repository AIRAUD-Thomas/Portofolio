<?php

namespace Models;

class Produits extends Database
{
   public function finProducts($category)
   {
       return $this->findCategory( 'product', $category );
   }
}