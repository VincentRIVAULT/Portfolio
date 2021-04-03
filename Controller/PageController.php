<?php

// Appel du fichier config.php où sont déclarées
// les classes et les tables de données correspondantes
include 'Config/config.php';

// Appel des fichiers PagesModel.php et PagesView.php
include 'Model/' . $classPage . 'Model.php';
include 'View/' . $classPage . 'View.php';

// Définition de la classe PageController
// la classe PageController hérite des propriétés et méthodes
// de sa classe mère "Controller"
class PageController extends Controller {
    
    public function __construct() {
        include 'Config/config.php';
        
        // stockage des classes PageView et PageModel
        // dans les variables $classView et $classModel
        $classView = $classPage . 'View';
        $classModel = $classPage . 'Model';

        // instanciation des classes PageView et PageModel
        // à l'aide des variables $classView et $classModel
        $this->view = new $classView();
        $this->model = new $classModel();
    }


    /**
     * Affichage de la page Pages
     *
     * @return void
     ******************************************************/
    public function display() {
        // l'id de la page est récupérée par $_GET
        $item = $this->model->getItem();
        $this->view->displayPageItem($item);
    }
    

    /**
     * Construction de la page Pages
     * (affichage de la page d'administration)
     * 
     * Liste des informations
     * @return void
     ******************************************************/
    public function edit() {
        $listeItems = $this->model->getItems();
        $this->view->editListPages($listeItems);
    }

    
    /**
     * Ajout d'une info en base de données (BDD)
     *
     * @return void
     ******************************************************/
    public function addDB() {
        include 'Config/config.php';
        
        $this->model->addDB();
        header('location:index.php?controller=' . $classPage . '&action=edit');
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
        header('location:index.php?controller=' . $classPage . '&action=edit');
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
        header('location:index.php?controller=' . $classPage . '&action=edit');
    }

}
