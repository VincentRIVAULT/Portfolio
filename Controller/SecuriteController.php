<?php

// Appel du fichier config.php où sont déclarées
// les classes et les tables de données correspondantes
include 'Config/config.php';

// Appel des fichiers SecuriteModel.php et SecuriteView.php
include 'Model/' . $classSecurite . 'Model.php';
include 'View/' . $classSecurite . 'View.php';

// Définition de la classe SecuriteController
// la classe SecuriteController hérite des propriétés et méthodes
// de sa classe mère "Controller"
class SecuriteController extends Controller {

    public function __construct() {
        include 'Config/config.php';
        
        $classView = $classSecurite . 'View';
        $classModel = $classSecurite . 'Model';

        // instanciation des classes SecuriteView et SecuriteModel
        $this->view = new $classView();
        $this->model = new $classModel();
    }

    /**
     * Afficher le formulaire de connexion
     *
     * @return void
     ************************************************************/
    public function formLogin() {
        $this->view->addForm();
    }

    /**
     * Vérifie si l'utilisateur est connecté
     *
     * @return void
     ************************************************************/
    public function login() {
        include 'Config/config.php';

        $utilisateur = $this->model->testlogin();
        
        if ($utilisateur != false) {
            if ($_SESSION['utilisateur']['rank'] == 'redacteur') {
                header('location:index.php?controller=' . $classPage . '&action=edit');
            }
            if ($_SESSION['utilisateur']['rank'] == 'administrateur') {
                header('location:index.php?controller=' . $classRealisation . '&action=edit');
            }
        } else {
            header('location:index.php?controller=' . $classSecurite . '&action=formLogin');
        }
    }

    /**
     * Fonction de déconnexion
     *
     * @return void
     ************************************************************/
    public function logout() {
        include 'Config/config.php';

        $this->model->logout();
        header('location:index.php');
    }
}
