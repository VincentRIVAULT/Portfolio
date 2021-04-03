<?php

// fonctions PHP pour identifier les erreurs
// lorsque l'on met le site internet en ligne sur un serveur distant
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// crée une session ou restaure celle trouvée sur le serveur,
// via l'identifiant de session passé dans une requête GET, POST ou par un cookie
session_start();

// conversion date au format français
setlocale(LC_TIME, "fr_FR");

// Appel du fichier config.php où sont déclarées
// les classes et les tables de données correspondantes
include 'Config/config.php';

// Appel des différents modules du MVC
include 'View/View.php';
include 'Model/Model.php';
include 'Controller/Controller.php';

// Appel des différents contrôleurs
include 'Controller/' . $classUtilisateur . 'Controller.php'; // classe Utilisateur
include 'Controller/' . $classSecurite . 'Controller.php'; // classe Securite
include 'Controller/' . $classPage . 'Controller.php'; // classe Page
include 'Controller/' . $classRealisation . 'Controller.php'; // classe Realisation
include 'Controller/' . $classMail . 'Controller.php'; // classe Mail

/**
 * Cette fonction permet d'extraire le contrôleur et l'action à lancer
 * à partir des informations reçues via l'URL et en tenant comptes des 
 * restrictions selon l'authentification de l'utilisateur
 *
 * @return array tableau contenant le contrôleur et l'action 
 *********************************************************************/
function extractParameters() {
    include 'Config/config.php';
    
    // Liste des contrôleurs accessibles par l'utilisateur quand il n'est pas connecté
    $controllerNotAuth = [
        '' . $classSecurite . 'Controller',
        '' . $classPage . 'Controller',
        '' . $classRealisation . 'Controller',
        '' . $classMail . 'Controller'
    ];

    // Liste des contrôleurs réservés à l'utilisateur authentifié
    $controllerAuth = [
        '' . $classUtilisateur . 'Controller',
        '' . $classRealisation . 'Controller'
    ];
    
    // Liste des actions accessibles par l'utilisateur lorsqu'il n'est pas connecté
    $actionNotAuth = ['display', 'view', 'lastView', 'formLogin', 'login', 'submitForm'];

    // Liste des actions réservées à l'utilisateur authentifié
    $actionAuth = ['addDB', 'addForm', 'edit', 'editForm', 'delDB'];

    // récupération des données de l'URL :
    // récupération du controller
    if (isset($_GET['controller'])) {
        $controller = ucfirst($_GET['controller']) . "Controller";
    } else {
        // si l'URL est vide, c'est le contrôleur de la classe "Page" qui est appelé
        $controller = '' . $classPage . 'Controller';
    }
    // récupération de l'action
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        // si aucune action n'est précisée dans l'URL,
        // c'est l'action d'affichage de la page qui s'effectue
        $action = 'display';
    }

    // validation des accès aux pages du site si l'utilisateur n'est pas authentifié
    if (!isset($_SESSION['utilisateur'])) {
        // si l'utilisateur n'est pas connecté, il a accès aux contrôleurs et actions
        // listés dans les variables $controllerNotAuth et $actionNotAuth
        if (!in_array($controller, $controllerNotAuth) || !in_array($action, $actionNotAuth)) {
            // sinon, il est renvoyé vers la page de connexion pour s'authentifier
            $controller = '' . $classSecurite . 'Controller';
            $action = "formLogin";
        }
        // si l'utilisateur est connecté en tant que rédacteur
    } elseif ($_SESSION['utilisateur']['rank'] == 'redacteur') {
        // on interdit au rédacteur les contrôleurs et actions
        // listés dans les variables $controllerAuth et $actionAuth
        if (in_array($controller, $controllerAuth) && in_array($action, $actionAuth)) {
            $controller = '' . $classSecurite . 'Controller';
            $action = "formLogin";
        }
        // si l'utilisateur est connecté en tant que administrateur
    } elseif ($_SESSION['utilisateur']['rank'] == 'administrateur') {
        // il a accès à tout
    }

    return (['controller' => $controller, 'action' => $action]);
}

// récupération des valeurs du Contrôleur et de l'action
$paramGet = extractParameters();
$controller = $paramGet['controller'];
$action = $paramGet['action'];

// instanciation de la classe Contrôleur
$controller = new $controller();

// $action définit la valeur contenue dans la méthode "$action()"
$controller->$action();
