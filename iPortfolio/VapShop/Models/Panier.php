<?php

namespace Models;

class Panier extends Database
{
   public function findProductsbyId($id)
   {
       return $this->find('product',$id);
   }

   public function addPanier($produits){
       $_SESSION['panier'][$produits]=$_GET['id'];
   }
}