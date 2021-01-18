<?php

namespace Equus\P5\router;

require_once('views/View.php');
require_once('controllers/ControllerHome.php');

class Router
{

    private $ctrl;
    private $view;

    public function routeReq()
    {
        try {

            //chargement automatique des classes 
            spl_autoload_register(function ($class) {
                $class = str_replace(__NAMESPACE__ . '\\', '', $class);
                $class = str_replace('\\', '/', $class);
                if (file_exists(__DIR__ . '/' . $class . '.php')) {
                    require __DIR__ . '/' . $class . '.php';
                }
            });

            //crée une variable
            $url = '';

            //on va déterminer un controller
            //en fonction de la valeur de cette variable

            if (isset($_GET['url'])) {
                //on décompose l'url et on lui applique un filtre
                $url = explode('/', filter_var($_GET['url'], FILTER_SANITIZE_URL));
                //on récupere le premier parametre de l'url
                //on met le tt en minuscule et sa premiere lettre en maj
                $controller = ucfirst(strtolower($url[0]));

                $controllerClass = "Controller" . $controller;

                //on retrouve le controller voulu
                $controllerFile = "controllers/" . $controllerClass . ".php";

                if (file_exists($controllerFile)) {
                    //on lance la classe en question
                    //avec tous les paramètres url
                    //pour respecter l'encapsulation
                    require_once($controllerFile);
                    $this->ctrl = new $controllerClass($url);
                } else {
                    throw new \Exception("Page introuvable", 1);
                }
            } else {
                require_once(dirname(__FILE__, 2) . '/controllers/ControllerHome.php');
                $this->ctrl = new \Equus\P5\controllers\ControllerHome($url);
            }
        } catch (\Exception $e) {
            $errorMsg = $e->getMessage();
            //vue sécurisée
            $this->_view = new \Equus\P5\views\View('Error');
            $this->_view->generate(array('errorMsg' => $errorMsg));
        }
    }
}
