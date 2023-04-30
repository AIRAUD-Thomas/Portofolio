<?php 

namespace Controllers;

class ConnexionController 
{
    public function display()
    {
        $model = new \Models\Connexion();
        $errorsForm = [];
        $msgValid = [];

        if($_POST):
            if (!empty($_POST['email']) && !empty($_POST['mdp'])) {
                $mdpConnect = $_POST['mdp'];
                $emailConnect = htmlspecialchars($_POST['email']);
                $user = $model->getUser($_POST['email']);
                /* $hashed_mdp = $model->getUser(); */

                if ($user == false) 
                {
                    $errorsForm[] = 'Adresse email n\'est attribué à aucun compte connu. Pas de compte ? Rendez vous sur la page Inscription !';
                }
                else {
                    if (password_verify($mdpConnect, $user['password'])) {
                        
                        $msgValid[] = 'ok ok ok ok ok!!!!!!';
                        $_SESSION['users']['email'] = $user['email'];
                        $_SESSION['users']['prenom'] = $user['prenom'];
                        $_SESSION['users']['id'] = $user['id'];
                        $_SESSION['users']['nom'] = $user['nom'];
                        var_dump($_SESSION);
                    }
                    else {
                        $errorsForm[] = 'Votre mot de passe de correspond pas à l\'email associé';
                    }
                }   

            } else {
                $errorsForm[] = 'veuillez remplir les champs';
            }
        endif;

        if(array_key_exists('users',$_SESSION)):
  
            header('location: index.php?route=espacemembres');    
            
            exit;
            
          endif;

        $template = "connexion.phtml";
        include_once 'views/layout.phtml';
    }
    
    
    
}