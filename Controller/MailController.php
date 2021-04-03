<?php

// Appel du fichier config.php où sont déclarées
// les classes et les tables de données correspondantes
include 'Config/config.php';

// Appel des fichiers MailModel.php et MailView.php
include 'Model/' . $classMail . 'Model.php';
include 'View/' . $classMail . 'View.php';


// Définition de la classe MailController
// la classe MailsController hérite des propriétés et méthodes
// de sa classe mère "Controller"
class MailController extends Controller {
    
    public function __construct() {
        include 'Config/config.php';
        
        $classView = $classMail . 'View';
        $classModel = $classMail . 'Model';

        // instanciation des classes MailView et MailModel
        $this->view = new $classView();
        $this->model = new $classModel();
    }
  

    /**
     * Déclenche deux actions à la soumission du formulaire
     *
     * @return void
     *******************************************************/
    public function submitForm() {
        include 'Config/config.php';
        // Le Contrôleur demande l'éxécution de la fonction addDB()
        // pour ajouter l'email envoyé par l'internaute en BDD
        $this->addDB();
        
        // Le contrôleur demande également au Modèle d'exécuter la fonction sendMail()
        $message = $this->model->sendMail();
        // si l'envoi a été un succès après la soumission du formulaire de contact
        if ($message == TRUE) {
            // alors on redirige l'internaute vers la page affichant le succès de l'envoi
            header('location:index.php?controller=' . $classPage . '&id=6');
        } else {
            // sinon on le redirige vers la page affichant l'échec de l'envoi
            header('location:index.php?controller=' . $classPage . '&id=7');
        }
        
    }
   

    /**
     * Construction de la page des mails envoyés par les internautes
     * (affichage de la page d'administration)
     * 
     * Liste des emails
     * @return void
     ******************************************************/
    public function edit() {
        $mails = $this->model->getItems();
        $this->view->editMails($mails);
    }

    
    /**
     * Ajout d'un email en base de données (BDD)
     *
     * @return void
     ******************************************************/
    public function addDB() {        
        $this->model->addDB();
    }

    
    /**
     * Suppression d'un email en BDD
     *
     * @return void
     ******************************************************/
    public function delDB() {
        include 'Config/config.php';
        
        $this->model->delDB();
        header('location:index.php?controller=' . $classMail . '&action=edit');
    }

}