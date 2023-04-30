<?php

//autoloader -> va inclure automatiquement les fichiers dès l'instant où l'on instancie une classe

spl_autoload_register(function ($class) { //$class = Controllers/HomeController

    require_once lcfirst(str_replace('\\', '/', $class)) . '.php';
});

//passer un paramètre pour lui indiquer quelle page on veut charger
session_start();


if (array_key_exists('route', $_GET)) :

    switch ($_GET['route']) {



            /* PAGE D'ACCUEIL: AFFICHE TOUT LES ARTICLES */
        case 'home':

            // require_once 'controller/HomeController.php';

            //instanciation de la classe controller
            $controller = new Controllers\HomeController();

            //appelle de la méthode
            $controller->display();

            break;

        case 'homeshop':

            // require_once 'controller/HomeController.php';

            //instanciation de la classe controller
            $controller = new Controllers\HomeshopController();

            //appelle de la méthode
            $controller->display();

            break;

        case 'inscription':


            //instanciation de la classe controller
            $controller = new Controllers\InscriptionController();

            //appelle de la méthode
            $controller->display();

            break;

        case 'connexion':


            //instanciation de la classe controller
            $controller = new Controllers\ConnexionController();

            //appelle de la méthode
            $controller->display();

            break;

        case 'espacemembres':


            //instanciation de la classe controller
            $controller = new Controllers\EspacemembresController();

            //appelle de la méthode
            $controller->display();

            break;

        case 'deconnexion':


            //instanciation de la classe controller
            $controller = new Controllers\DeconnexionController();

            //appelle de la méthode
            $controller->display();

            break;

        case 'vapoteuse':


            //instanciation de la classe controller
            $controller = new Controllers\VapoteuseController();

            //appelle de la méthode
            $controller->display();

            break;

        case 'eliquide':


            //instanciation de la classe controller
            $controller = new Controllers\EliquideController();

            //appelle de la méthode
            $controller->display();

            break;

        case 'accessoire':


            //instanciation de la classe controller
            $controller = new Controllers\AccessoireController();

            //appelle de la méthode
            $controller->display();

            break;

        case 'userbasket':


            //instanciation de la classe controller
            $controller = new Controllers\UserbasketController();

            //appelle de la méthode
            $controller->display();

            break;





            /* SI Y'A PAS DE ROUTE REDIRIGE VERS L'ACCUEIL DU SITE */
        default:
            header('location: index.php?route=home');
            exit;
    }

else :

    header('location: index.php?route=home');
    exit;

endif;
