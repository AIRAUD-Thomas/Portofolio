<?php

namespace Controllers;

class InscriptionController
{
    public function display()
    {
        $model = new \Models\Inscription();



        $errorsForm = [];
        $msgValid = [];
        if($_POST):
        if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['mdp'])) {
            $nomI = htmlspecialchars($_POST['nom']);
            $prenomI = htmlspecialchars($_POST['prenom']);
            $emailI = htmlspecialchars($_POST['email']);
            $mdpI = $_POST['mdp'];
            $hashed_mdp = password_hash($mdpI, PASSWORD_DEFAULT);
            $user = $model->getUser($_POST['email']);

            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false) {
                $errorsForm[] = 'Veuillez indiquer un email valide';
            }
            if ($user) {

                $errorsForm[] = 'Email deja attribué a un autre compte';
            }
            
            /* FIN DES VERIF */

            if (empty($errorsForm)) {
                $model->newUser( $nomI, $prenomI, $emailI, $hashed_mdp );
                $msgValid[] = 'Votre compte a bien été créer ! Rendez vous sur la page connexion.';
            }




        } else {
            $errorsForm[] = 'Veuillez remplir les champs';
        }

    endif;




        $template = "inscription.phtml";
        include_once 'views/layout.phtml';
    }
}
