<?php

// Appel du fichier config.php où sont déclarées
// les classes et les tables de données correspondantes
include 'Config/config.php';

// Appel des fichiers RealisationModel.php et RealisationView.php
include 'Model/' . $classRealisation . 'Model.php';
include 'View/' . $classRealisation . 'View.php';

// Définition de la classe RealisationController
// la classe RealisationController hérite des propriétés et méthodes
// de sa classe mère "Controller"
class RealisationController extends Controller {
    
    public function __construct() {
        include 'Config/config.php';
        
        $classView = $classRealisation . 'View';
        $classModel = $classRealisation . 'Model';

        // instanciation des classes RealisationView et RealisationModel
        $this->view = new $classView();
        $this->model = new $classModel();
    }


    /**
     * Affichage de la page réalisations (liste des réalisations)
     *
     * @return void
     ******************************************************/
    public function display() {
        $realisations = $this->model->getItems();
        $this->view->displayListRealisations($realisations);
    }


    /**
     * Affichage de la page du détail de chaque réalisation
     *
     * @return void
     ******************************************************/
    public function view() {
        $realisation = $this->model->getItem();
        $this->view->displayRealisation($realisation);
    }


    /**
     * Affichage de la page du détail de la dernière réalisation
     *
     * @return void
     ******************************************************/
    public function lastView() {
        $lastRealisation = $this->model->getLastItem();
        $this->view->displayLastRealisation($lastRealisation);
    }
    

    /**
     * Construction de la page réalisations
     * (affichage de la page d'administration)
     * 
     * Liste des informations
     * @return void
     ******************************************************/
    public function edit() {
        $realisations = $this->model->getItems();
        $this->view->editListRealisations($realisations);
    }

    
    /**
     * Ajout d'une info en base de données (BDD)
     *
     * @return void
     ******************************************************/
    public function addDB() {
        include 'Config/config.php';
        
        $this->model->addDB();
        header('location:index.php?controller=' . $classRealisation . '&action=edit');
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
        header('location:index.php?controller=' . $classRealisation . '&action=edit');
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
        header('location:index.php?controller=' . $classRealisation . '&action=edit');
    }

}