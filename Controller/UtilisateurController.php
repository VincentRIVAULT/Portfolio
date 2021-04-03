<?php

// Appel du fichier config.php où sont déclarées
// les classes et les tables de données correspondantes
include 'Config/config.php';

// Appel des fichiers UtilisateurModel.php et UtilisateurView.php
include 'Model/' . $classUtilisateur . 'Model.php';
include 'View/' . $classUtilisateur . 'View.php';

// Définition de la classe UtilisateurController
// la classe UtilisateurController hérite des propriétés et méthodes
// de sa classe mère "Controller"
class UtilisateurController extends Controller {
    
    public function __construct() {
        include 'Config/config.php';
        
        $classView = $classUtilisateur . 'View';
        $classModel = $classUtilisateur . 'Model';

        // instanciation des classes UtilisateursView et UtilisateursModel
        $this->view = new $classView();
        $this->model = new $classModel();
    }


    /**
     * Construction de la page des utilisateurs
     * (affichage de la page d'administration)
     * 
     * Liste des informations
     * @return void
     ******************************************************/
    public function edit() {
        $listeItems = $this->model->getItems();
        $this->view->editUtilisateurs($listeItems);
    }

    
    /**
     * Ajout d'une info en base de données (BDD)
     *
     * @return void
     ******************************************************/
    public function addDB() {
        include 'Config/config.php';
        
        $this->model->addDB();
        header('location:index.php?controller=' . $classUtilisateur . '&action=edit');
    }

    
    /**
     * Gestion de l'affichage du formulaire d'ajout
     *
     * @return void
     ******************************************************/
    public function addForm() {
        $this->view->addForm();
    }

    
    /**
     * Suppression d'une info en BDD
     *
     * @return void
     ******************************************************/
    public function delDB() {
        include 'Config/config.php';
        
        $this->model->delDB();
        header('location:index.php?controller=' . $classUtilisateur . '&action=edit');
    }

    
    /**
     * Récupération d'une info en BDD
     *
     * @return void
     ******************************************************/
    public function editForm() {
        $item = $this->model->getItem();
        $this->view->editForm($item);
    }

    
    /**
     * Moddification d'une info en BDD
     *
     * @return void
     ******************************************************/
    public function editDB() {
        include 'Config/config.php';
        
        $this->model->editDB();
        header('location:index.php?controller=' . $classUtilisateur . '&action=edit');
    }

}